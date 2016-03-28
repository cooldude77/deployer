<?php
/**
 * Created by PhpStorm.
 * User: AKS
 * Date: 3/28/2016
 * Time: 12:12 PM
 */

namespace Deployer\vcs;


class Mercurial
{

    public function updateCode()
    {
        $repository = get('repository');

        // if we're using git cache this would be identical to above code in catch - full clone. If not, it would create shallow clone.
        run("hg clone $repository");


    }
}
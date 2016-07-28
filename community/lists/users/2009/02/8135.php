<?
$subject_val = "[OMPI users] OpenMPI 1.3:";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 09:53:47 2009" -->
<!-- isoreceived="20090220145347" -->
<!-- sent="Fri, 20 Feb 2009 15:53:36 +0100" -->
<!-- isosent="20090220145336" -->
<!-- name="Olaf Lenz" -->
<!-- email="lenzo_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.3:" -->
<!-- id="499EC3F0.8060701_at_mpip-mainz.mpg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] OpenMPI 1.3:<br>
<strong>From:</strong> Olaf Lenz (<em>lenzo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 09:53:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8136.php">Olaf Lenz: "[OMPI users] openmpi 1.3: undefined symbol: mca_base_param_reg_int [was: Re: OpenMPI 1.3:]"</a>
<li><strong>Previous message:</strong> <a href="8134.php">Gabriele Fatigati: "[OMPI users] Strange problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8136.php">Olaf Lenz: "[OMPI users] openmpi 1.3: undefined symbol: mca_base_param_reg_int [was: Re: OpenMPI 1.3:]"</a>
<li><strong>Reply:</strong> <a href="8136.php">Olaf Lenz: "[OMPI users] openmpi 1.3: undefined symbol: mca_base_param_reg_int [was: Re: OpenMPI 1.3:]"</a>
<li><strong>Reply:</strong> <a href="8158.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hello!
<br>
<p>I have compiled OpenMPI 1.3 with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure --prefix=$HOME/software
<br>
<p>The compilation works fine, and I can run normal MPI programs.
<br>
<p>However, I'm using OpenMPI to run a program that we currently develop
<br>
(<a href="http://www.espresso-pp.de">http://www.espresso-pp.de</a>). The software uses Python as a front-end
<br>
language, which loads the MPI-enabled shared library. When I start
<br>
python with a script using this parallel lib via mpiexec, I get the
<br>
following error:
<br>
<p><span class="quotelev1">&gt; mpiexec -n 4 python examples/hello.py
</span><br>
python: symbol lookup error:
<br>
/people/thnfs/homes/lenzo/software.thop/lib/openmpi/mca_paffinity_linux.so:
<br>
undefined symbol: mca_base_param_reg_int
<br>
python: symbol lookup error:
<br>
/people/thnfs/homes/lenzo/software.thop/lib/openmpi/mca_paffinity_linux.so:
<br>
undefined symbol: mca_base_param_reg_int
<br>
python: symbol lookup error:
<br>
/people/thnfs/homes/lenzo/software.thop/lib/openmpi/mca_paffinity_linux.so:
<br>
undefined symbol: mca_base_param_reg_int
<br>
python: symbol lookup error:
<br>
/people/thnfs/homes/lenzo/software.thop/lib/openmpi/mca_paffinity_linux.so:
<br>
undefined symbol: mca_base_param_reg_int
<br>
<p>When I compile OpenMPI 1.3 using
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-shared --enable-static
<br>
<p>the problem disappears. Note also, that the same program works when I'm
<br>
using OpenMPI 1.2.x (tested 1.2.6 and 1.2.9). I do believe that the
<br>
problem is connected with the problem described here:
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2005/09/0359.php">http://www.open-mpi.org/community/lists/devel/2005/09/0359.php</a>
<br>
<p>I have found a workaround, but I think the problem is worth reporting.
<br>
<p>Let me know if I can help in debugging the problem.
<br>
<p>Greetings from Germany
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Olaf Lenz
<br>
<p>PS: It is not obvious on the OpenMPI web site where to report bugs. When
<br>
clicking on &quot;Bug Tracking&quot;, which seems most obvious, I'm redirected to
<br>
the Trac Timeline, and there is no place where I can report bugs or
<br>
anything.
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v2.0.4-svn0 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iD8DBQFJnsPwtQ3riQ3oo/oRAmLfAJ9VdcC1eQCiJyQCoXdXF/UsAgECVgCfXYA+
<br>
H3ghX4gj3dGze0io6RQC+KE=
<br>
=Wu5B
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8136.php">Olaf Lenz: "[OMPI users] openmpi 1.3: undefined symbol: mca_base_param_reg_int [was: Re: OpenMPI 1.3:]"</a>
<li><strong>Previous message:</strong> <a href="8134.php">Gabriele Fatigati: "[OMPI users] Strange problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8136.php">Olaf Lenz: "[OMPI users] openmpi 1.3: undefined symbol: mca_base_param_reg_int [was: Re: OpenMPI 1.3:]"</a>
<li><strong>Reply:</strong> <a href="8136.php">Olaf Lenz: "[OMPI users] openmpi 1.3: undefined symbol: mca_base_param_reg_int [was: Re: OpenMPI 1.3:]"</a>
<li><strong>Reply:</strong> <a href="8158.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>

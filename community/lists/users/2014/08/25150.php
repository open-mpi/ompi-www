<?
$subject_val = "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 10:10:49 2014" -->
<!-- isoreceived="20140826141049" -->
<!-- sent="Tue, 26 Aug 2014 07:10:12 -0700" -->
<!-- isosent="20140826141012" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5" -->
<!-- id="E876DEF4-FFF2-48F1-8159-E8C96F4DCCEF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAsJOZFXTCVOhzHqVyq=QM-pfoEXQfQcjxSeXzhSscvgVrQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 10:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Previous message:</strong> <a href="25149.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>In reply to:</strong> <a href="25147.php">Syed Ahsan Ali: "[OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Reply:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like there is something wrong with your gfortran install:
<br>
<p>*** Fortran compiler
<br>
checking for gfortran... gfortran
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether gfortran accepts -g... yes
<br>
checking whether ln -s works... yes
<br>
checking if Fortran compiler works... no
<br>
**********************************************************************
<br>
* It appears that your Fortran compiler is unable to produce working
<br>
* executables.  A simple test application failed to properly
<br>
* execute.  Note that this is likely not a problem with Open MPI,
<br>
* but a problem with the local compiler installation.  More
<br>
* information (including exactly what command was given to the
<br>
* compiler and what error resulted when the command was executed) is
<br>
* available in the config.log file in the Open MPI build directory.
<br>
**********************************************************************
<br>
configure: error: Could not run a simple Fortran program.  Aborting.
<br>
<p><p>FWIW: I can compile and run on my CentOS6.5 system just fine. I have gfortran 4.4.7 installed on it
<br>
<p>On Aug 26, 2014, at 2:59 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have problems in compilation of openmpi-1.8.1 on Linux machine. Kindly see the logs attached.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;configure.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25147.php">http://www.open-mpi.org/community/lists/users/2014/08/25147.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Previous message:</strong> <a href="25149.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>In reply to:</strong> <a href="25147.php">Syed Ahsan Ali: "[OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Reply:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
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

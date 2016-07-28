<?
$subject_val = "Re: [OMPI users] Unable to include mpich library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 04:11:32 2010" -->
<!-- isoreceived="20100625081132" -->
<!-- sent="Fri, 25 Jun 2010 10:11:26 +0200" -->
<!-- isosent="20100625081126" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to include mpich library" -->
<!-- id="AANLkTikVHNh96SWHcTDQ4Yxp8FYx1b2ERws9Vt-zYUqb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTik3idEgW-lXeQ387-Xaq6vCCiP7Tj89kLRZEeNO_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to include mpich library<br>
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 04:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13406.php">Srinivas Gopal: "[OMPI users] Unable to include mpich library"</a>
<li><strong>In reply to:</strong> <a href="13406.php">Srinivas Gopal: "[OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 25, 2010 at 9:14 AM, Srinivas Gopal &lt;srinivas13.2_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; &#160;&#160; I'm trying to build CCSM4 for which I'm using open mpi 1.4.1. $MPICH_PATH
</span><br>
<span class="quotelev1">&gt; is set /usr/local (output of $which mpirun is /usr/local/bin/mpirun) and
</span><br>
<span class="quotelev1">&gt; LIB_MPI is set to $(MPICH_PATH)/lib in its Macros file. However build
</span><br>
<span class="quotelev1">&gt; process exits with the following error:
</span><br>
<span class="quotelev1">&gt; .....4/scratch//d_f45/lib -lcsm_share -lmct -lmpeu -lpio
</span><br>
<span class="quotelev1">&gt; -L/home/srinivas/netcdf/lib -lnetcdf&#160; -L/usr/local/lib -lmpich
</span><br>
<span class="quotelev1">&gt; -L/home/srinivas/pnetcdf/lib -lpnetcdf
</span><br>
<span class="quotelev1">&gt; ld: cannot find -lmpich
</span><br>
<p>Hi Srinivas,
<br>
<p>libmpich is not part of open-mpi. Maybe your software build with mpich
<br>
only? If your software does not use anything specific to mpich, you
<br>
could try to change -lmpich to -lmpi .
<br>
<p>Regards, G&#246;tz
<br>
<pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13406.php">Srinivas Gopal: "[OMPI users] Unable to include mpich library"</a>
<li><strong>In reply to:</strong> <a href="13406.php">Srinivas Gopal: "[OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
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

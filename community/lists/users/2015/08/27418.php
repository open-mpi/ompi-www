<?
$subject_val = "[OMPI users] Open MPI 1.8.8 and hcoll in system space";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 18:39:33 2015" -->
<!-- isoreceived="20150810223933" -->
<!-- sent="Mon, 10 Aug 2015 16:39:31 -0600" -->
<!-- isosent="20150810223931" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.8.8 and hcoll in system space" -->
<!-- id="55C92823.5030300_at_lanl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.8.8 and hcoll in system space<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-10 18:39:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27417.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Maybe reply:</strong> <a href="27447.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I'm having some trouble getting Open MPI 1.8.8 to configure correctly 
<br>
when hcoll is installed in system space. That is, hcoll is installed to 
<br>
/usr/lib64 and /usr/include/hcoll. I get an error during configure:
<br>
<p>$&gt; Konsole output ./configure --with-hcoll
<br>
...output snipped...
<br>
Konsole output configure:219976: checking for MCA component coll:hcoll 
<br>
compile mode
<br>
configure:219982: result: static
<br>
configure:220039: checking --with-hcoll value
<br>
configure:220042: result: simple ok (unspecified)
<br>
configure:220840: error: HCOLL support requested but not found. Aborting
<br>
<p>I have also tried using &quot;--with-hcoll=yes&quot; and gotten the same behavior. 
<br>
Has anyone else gotten the hcoll component to build when hcoll itself is 
<br>
in system space? I am using hcoll-3.2.748.
<br>
<p>I did take a look at configure, and it looks like there is a test on 
<br>
&quot;with_hcoll&quot; to see if it is not empty and not yes on line 220072. In my 
<br>
case, this test fails, so the else clause gets invoked. The else clause 
<br>
is several hundred lines below on line 220822 and simply sets Konsole 
<br>
output ompi_check_hcoll_happy=&quot;no&quot;. Configure doesn't try to do anything 
<br>
to figure out if hcoll is usable, but it does quit soon after with the 
<br>
above error because ompi_check_hcoll_happy isn't &quot;yes.&quot;
<br>
<p>In case it helps, here is the output from config.log for that area:
<br>
<p>...output snipped...
<br>
configure:219976: checking for MCA component coll:hcoll compile mode
<br>
configure:219982: result: dso
<br>
configure:220039: checking --with-hcoll value
<br>
configure:220042: result: simple ok (unspecified)
<br>
configure:220840: error: HCOLL support requested but not found. Aborting
<br>
<p>## ---------------- ##
<br>
## Cache variables. ##
<br>
## ---------------- ##
<br>
...output snipped...
<br>
<p>Have I missed something in specifying --with-hcoll? I would prefer not 
<br>
to use &quot;--with-hcoll=/usr&quot; as I am pretty sure that spurious linker 
<br>
flags to that area will work their way in when they shouldn't.
<br>
<p>Thanks,
<br>
David
<br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27417.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Reply:</strong> <a href="27419.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Maybe reply:</strong> <a href="27447.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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

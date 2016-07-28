<?
$subject_val = "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 12:06:29 2009" -->
<!-- isoreceived="20090416160629" -->
<!-- sent="Thu, 16 Apr 2009 13:04:21 -0300" -->
<!-- isosent="20090416160421" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel compiler libraries (was: libnuma issue)" -->
<!-- id="20090416160421.GB23471_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b87c422a0904160829m33e2e0ddt72960a851ac1a53f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intel compiler libraries (was: libnuma issue)<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 12:04:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8958.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Previous message:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8965.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8965.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 16, 2009 at 05:29:14PM +0200, Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; On Thu, Apr 16, 2009 at 3:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
...
<br>
<span class="quotelev1">&gt; Given my inexperience as system analyzer, I assume that I am messing
</span><br>
<span class="quotelev1">&gt; something. Unfortunately, i was unable to discover where I am messing.
</span><br>
<span class="quotelev1">&gt; An editor is waiting completion of calculations requested by a
</span><br>
<span class="quotelev1">&gt; referee, and I am unable to answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks a lot for all you have tried to put me on the right road
</span><br>
<p>I wonder if the confusion stems from the requirement to &quot;source&quot; the
<br>
intel compiler setup files in (at least) two situations:
<br>
&nbsp;&nbsp;1. when compiling the (MPI) application
<br>
&nbsp;&nbsp;2. when running the (MPI) application
<br>
<p>My solution to the second has been to create - as part of the build
<br>
process for my application - a &quot;run&quot; script for it.  That script
<br>
sources the intel setup files, then runs the application.
<br>
<p>Here is part of the script that runs my application:
<br>
<p>==================================================
<br>
# If it is defined, source the intel setup script.
<br>
#
<br>
if test &quot;x/opt/intel/Compiler/11.0/074/bin/ifortvars.sh intel64&quot; != x ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;setup the intel compiler with &lt;/opt/intel/Compiler/11.0/074/bin/ifortvars.sh intel64&gt;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;. /opt/intel/Compiler/11.0/074/bin/ifortvars.sh intel64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if test -z $(echo ${LD_LIBRARY_PATH} | grep intel) ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Don't see intel in LD_LIBRARY_PATH=&lt;${LD_LIBRARY_PATH}&gt;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;you may have trouble&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
fi
<br>
...
<br>
# run my program
<br>
==================================================
<br>
<p>I am running only on the 4 cores of one machine, so this solution may
<br>
not work for MPI applications that run on multiple machines.
<br>
<p>Hope that helps,
<br>
Douglas.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8958.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Previous message:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8965.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8965.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
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

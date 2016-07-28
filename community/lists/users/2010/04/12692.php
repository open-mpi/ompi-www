<?
$subject_val = "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 09:11:31 2010" -->
<!-- isoreceived="20100419131131" -->
<!-- sent="Mon, 19 Apr 2010 09:11:22 -0400" -->
<!-- isosent="20100419131122" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="8FD4CDD6-B46B-47BF-A731-59FDE0F23449_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="m2na5d7282e1004160905v7225e18i88d9099cd13d3a2d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 09:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12691.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12655.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2010, at 12:05 PM, Baowei Liu wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply. Sorry I didn't make it clear..... When I run config.guess of gcc, it gives me the x86_64 system. But when I run &quot;uname -a&quot;, it says it's i386. I think that's the reason OMPI complains about &quot;more than one -arch option (not allowed, use cc(1) instead)&quot;. 
</span><br>
<p>What do you mean?  I don't think you've mentioned that before...?
<br>
<p><span class="quotelev1">&gt; The new gcc can create executibals. I use it to compile my own c++ programs. And I don't need special flags. I need a higher version of gcc than the default one just because I cannot build a package (QE:Quantum Espresso) with the default gcc -- QE uses OMPI.  I can install OMPI with the default gcc.  I tried this: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. install OMPI with default gcc and OMPI works fine.
</span><br>
<span class="quotelev1">&gt; 2. install the new gcc and install the QE package, successfully.
</span><br>
<span class="quotelev1">&gt; 3. mpirun stops working with eorror&quot; cannot initialize&quot;
</span><br>
<p>This is the first time you've mentioned this, too.  :-)
<br>
<p>Did you re-install Open MPI with the new gcc (and no -m flags, etc.)?  If that doesn't work, please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12691.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12655.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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

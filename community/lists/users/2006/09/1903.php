<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 28 15:11:37 2006" -->
<!-- isoreceived="20060928191137" -->
<!-- sent="Thu, 28 Sep 2006 15:11:33 -0400" -->
<!-- isosent="20060928191133" -->
<!-- name="Caird, Andrew J" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using both 64 and 32 bit mpi" -->
<!-- id="CBA57977CF4A2A4D94031A347F7E011B05FCD1_at_ECLUST2-VS2.adsroot.itcs.umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1159470238.28535.15.camel_at_modeler.srrc.ars.usda.gov" -->
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
<strong>From:</strong> Caird, Andrew J (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-28 15:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1904.php">Abhishek Pratap: "[OMPI users] Need help in Perl with MPI"</a>
<li><strong>Previous message:</strong> <a href="1902.php">Glenn Johnson: "[OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>In reply to:</strong> <a href="1902.php">Glenn Johnson: "[OMPI users] using both 64 and 32 bit mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1910.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glenn,
<br>
<p>If you're careful with $PATH and $LD_LIBRARY_PATH you can certainly do
<br>
this.  One thing that makes this a little easier is the 'modules'
<br>
package (<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>).  We use this to maintain 9
<br>
versions of OpenMPI for various reasons, along with 5 versions of LAM
<br>
and a version of MPICH.  It does a nice job of keeping everything
<br>
separate and our uses have grasped it pretty quickly.
<br>
<p>Good luck.
<br>
--andy
<br>
&nbsp;&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Glenn Johnson
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, September 28, 2006 3:04 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] using both 64 and 32 bit mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an 8-way AMD64 system. I built a 64 bit open-mpi-1.1 
</span><br>
<span class="quotelev1">&gt; implementation and then compiled software to use it. That all 
</span><br>
<span class="quotelev1">&gt; works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition, I have a 32 bit binary program (Schrodinger 
</span><br>
<span class="quotelev1">&gt; Jaguar) that I would like to run on this machine with mpi. 
</span><br>
<span class="quotelev1">&gt; Schrodinger provides source code to build an mpi 
</span><br>
<span class="quotelev1">&gt; compatibility layer. This compatibility layer allows jaguar 
</span><br>
<span class="quotelev1">&gt; to use a different mpi implementation than that which the 
</span><br>
<span class="quotelev1">&gt; software was compiled with. I do not want to give up the 64 
</span><br>
<span class="quotelev1">&gt; bit open-mpi that I already have and am using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my questions are:
</span><br>
<span class="quotelev1">&gt;      1. Can I build/install a 32 bit version of open-mpi even though I
</span><br>
<span class="quotelev1">&gt;         already have a 64 bit version installed?
</span><br>
<span class="quotelev1">&gt;      2. What &quot;tricks&quot; might I need to do to make sure a program calls
</span><br>
<span class="quotelev1">&gt;         the correct version of mpi (32 or 64 bit)?
</span><br>
<span class="quotelev1">&gt;      3. Would I do better considering running jaguar in a 32 
</span><br>
<span class="quotelev1">&gt; bit chroot
</span><br>
<span class="quotelev1">&gt;         environment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Glenn Johnson &lt;gjohnson_at_[hidden]&gt; USDA, ARS, SRRC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1904.php">Abhishek Pratap: "[OMPI users] Need help in Perl with MPI"</a>
<li><strong>Previous message:</strong> <a href="1902.php">Glenn Johnson: "[OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>In reply to:</strong> <a href="1902.php">Glenn Johnson: "[OMPI users] using both 64 and 32 bit mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1910.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
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

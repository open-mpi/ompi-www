<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 11:49:34 2006" -->
<!-- isoreceived="20060224164934" -->
<!-- sent="Fri, 24 Feb 2006 08:49:27 -0800" -->
<!-- isosent="20060224164927" -->
<!-- name="Scott Weitzenkamp \(sweitzen\)" -->
<!-- email="sweitzen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] couple of subversion questions" -->
<!-- id="A15335FBE9BD2449AF2C9EF3D1EB8EA30158481E_at_xmb-sjc-216.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] couple of subversion questions" -->
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
<strong>From:</strong> Scott Weitzenkamp \(sweitzen\) (<em>sweitzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 11:49:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Maybe in reply to:</strong> <a href="0676.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] couple of subversion questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for humoring me, I get it now :-).
<br>
<p>Scott 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Friday, February 24, 2006 4:09 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] couple of subversion questions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2006, at 1:13 AM, Scott Weitzenkamp ((sweitzen)) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hmmm...I seem to be able to get at some of the tests if I know the  
</span><br>
<span class="quotelev2">&gt; &gt; names
</span><br>
<span class="quotelev2">&gt; &gt; of them by reading the mailing lists.  Am I checking out 
</span><br>
<span class="quotelev1">&gt; private stuff
</span><br>
<span class="quotelev2">&gt; &gt; below or not?  I guess svn is a true replacement for CVS 
</span><br>
<span class="quotelev1">&gt; (given CVS  
</span><br>
<span class="quotelev2">&gt; &gt; can
</span><br>
<span class="quotelev2">&gt; &gt; be very confusing too :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> trunk/intel_tests
</span><br>
<span class="quotelev2">&gt; &gt; A    trunk/intel_tests/test
</span><br>
<span class="quotelev2">&gt; &gt; A    trunk/intel_tests/test/mca
</span><br>
<span class="quotelev2">&gt; &gt; A    trunk/intel_tests/test/mca/oob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're actually checking out the OMPI repository itself and calling  
</span><br>
<span class="quotelev1">&gt; it &quot;intel_tests&quot;.  :-)  The SVN &quot;co&quot; command line takes the form:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	svn co &lt;URL&gt; &lt;LOCAL_DIR_NAME&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you told SVN to check out the /svn/ompi/trunk repository 
</span><br>
<span class="quotelev1">&gt; (which is  
</span><br>
<span class="quotelev1">&gt; the main OMPI code base), but to put it in a local directory named  
</span><br>
<span class="quotelev1">&gt; &quot;trunk/intel_tests&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our internal tests are actually in a different repository altogether.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Maybe in reply to:</strong> <a href="0676.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] couple of subversion questions"</a>
<!-- nextthread="start" -->
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

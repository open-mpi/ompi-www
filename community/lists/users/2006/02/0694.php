<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 07:09:19 2006" -->
<!-- isoreceived="20060224120919" -->
<!-- sent="Fri, 24 Feb 2006 07:09:09 -0500" -->
<!-- isosent="20060224120909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] couple of subversion questions" -->
<!-- id="AA2FD2F7-3925-431C-929F-9CF6303EE510_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A15335FBE9BD2449AF2C9EF3D1EB8EA30158475C_at_xmb-sjc-216.amer.cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 07:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0693.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0690.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0703.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2006, at 1:13 AM, Scott Weitzenkamp ((sweitzen)) wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...I seem to be able to get at some of the tests if I know the  
</span><br>
<span class="quotelev1">&gt; names
</span><br>
<span class="quotelev1">&gt; of them by reading the mailing lists.  Am I checking out private stuff
</span><br>
<span class="quotelev1">&gt; below or not?  I guess svn is a true replacement for CVS (given CVS  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; be very confusing too :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> trunk/intel_tests
</span><br>
<span class="quotelev1">&gt; A    trunk/intel_tests/test
</span><br>
<span class="quotelev1">&gt; A    trunk/intel_tests/test/mca
</span><br>
<span class="quotelev1">&gt; A    trunk/intel_tests/test/mca/oob
</span><br>
<p>You're actually checking out the OMPI repository itself and calling  
<br>
it &quot;intel_tests&quot;.  :-)  The SVN &quot;co&quot; command line takes the form:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;svn co &lt;URL&gt; &lt;LOCAL_DIR_NAME&gt;
<br>
<p>So you told SVN to check out the /svn/ompi/trunk repository (which is  
<br>
the main OMPI code base), but to put it in a local directory named  
<br>
&quot;trunk/intel_tests&quot;.
<br>
<p>Our internal tests are actually in a different repository altogether.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0695.php">Rainer Keller: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0693.php">Emanuel Ziegler: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="0690.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0703.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
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

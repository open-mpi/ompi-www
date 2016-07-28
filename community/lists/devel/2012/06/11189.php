<?
$subject_val = "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 20:25:26 2012" -->
<!-- isoreceived="20120627002526" -->
<!-- sent="Tue, 26 Jun 2012 20:25:22 -0400" -->
<!-- isosent="20120627002522" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration" -->
<!-- id="CAANzjE==5=Wrm3qgKNOhaMZszOYLxKONECVwqPZvvUbY-ECb=A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjE=zrQNqr+0X75813HD-zzLs-5PS7a9m4rF6Xe=DY_Lwpw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 20:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11190.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Previous message:</strong> <a href="11188.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>In reply to:</strong> <a href="11188.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11190.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Reply:</strong> <a href="11190.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I can confirm that it is not linking properly on the Mac. It -is-
<br>
running correctly on Linux (which is where I have been testing).
<br>
<p><span class="quotelev1">&gt;From what I can tell this is a linking issue specific to the Mac. I'm
</span><br>
digging into it a bit at the moment.
<br>
<p>Interesting way to tell is by using ompi_info as a canary. If you
<br>
compile with (what is default):
<br>
&nbsp;../../../ompi/libmpi.la -L/Users/jju/work/open-mpi/ompi-trunk/orte/ -lopen-rte
<br>
It will display components from OMPI,ORCA,OPAL
<br>
If you change that too:
<br>
&nbsp;../../../ompi/libmpi.la  ../../../orte/libopen-rte.la
<br>
you get the same thing, but if you change it to:
<br>
&nbsp;./../../ompi/libmpi.la  ../../../orte/libopen-rte.la ./../../ompi/libmpi.la
<br>
Then it only displays the ORTE,OPAL components.
<br>
<p>So I am thinking that this is an issue with using two .la's in a
<br>
single linking - something that is not showing up on Linux.
<br>
<p>Any pointers on what might be going on here would be appreciated as I
<br>
dig further.
<br>
<p>-- Josh
<br>
<p><p>On Tue, Jun 26, 2012 at 7:40 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; That is odd. I did not see that when testing on Linux. I'll take a look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 26, 2012 at 7:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: it built fine on my Mac, but doesn't run. Just hangs when attempting to execute any MPI application. Will execute non-MPI apps though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking deeper, it looks like the app is stuck waiting to receive the sync registration &quot;ack&quot;. Mpirun thinks it sent it, but the app is unable to receive it, so I would guess the app is failing to progress the RTE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you can't resolve that quickly, I would suggest backing this out and the two of us looking at it in the morning. Somehow, you've lost the progress loop that was driving the RTE thru orte_init.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 26, 2012, at 3:44 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r26670 is the first of the ORCA commits. I am switching machines for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing. Hang on for a couple more hours while the initial testing is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; underway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jun 26, 2012 at 4:34 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am requesting a quiet time on the trunk for ORCA integration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; starting -now- (as previously announced). I will post back when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; everything is committed and ready to go.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some reading while you are waiting:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;<a href="http://www.open-mpi.org/community/lists/devel/2012/06/11109.php">http://www.open-mpi.org/community/lists/devel/2012/06/11109.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11190.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Previous message:</strong> <a href="11188.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>In reply to:</strong> <a href="11188.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11190.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Reply:</strong> <a href="11190.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
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

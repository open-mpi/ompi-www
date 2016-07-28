<?
$subject_val = "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 21:04:52 2012" -->
<!-- isoreceived="20120627010452" -->
<!-- sent="Tue, 26 Jun 2012 21:04:48 -0400" -->
<!-- isosent="20120627010448" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration" -->
<!-- id="CAANzjE=pfNL5jNnd7i+_H0Q6eybJxg8e2hoxyJaXXYm=_8t_ag_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjE==5=Wrm3qgKNOhaMZszOYLxKONECVwqPZvvUbY-ECb=A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-06-26 21:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11191.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Previous message:</strong> <a href="11189.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>In reply to:</strong> <a href="11189.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11191.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Reply:</strong> <a href="11191.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I'm spinning my wheels on this one. I am going to need someone with
<br>
more knowledge about linking to help (Jeff or Brian maybe?).
<br>
<p>I'll see what I can do to back this out of the trunk :(
<br>
<p>I wish this issue would have come up earlier - I just don't ever build
<br>
on my mac, so I never saw it.
<br>
<p>-- Josh
<br>
<p>On Tue, Jun 26, 2012 at 8:25 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; So I can confirm that it is not linking properly on the Mac. It -is-
</span><br>
<span class="quotelev1">&gt; running correctly on Linux (which is where I have been testing).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From what I can tell this is a linking issue specific to the Mac. I'm
</span><br>
<span class="quotelev1">&gt; digging into it a bit at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting way to tell is by using ompi_info as a canary. If you
</span><br>
<span class="quotelev1">&gt; compile with (what is default):
</span><br>
<span class="quotelev1">&gt; &#160;../../../ompi/libmpi.la -L/Users/jju/work/open-mpi/ompi-trunk/orte/ -lopen-rte
</span><br>
<span class="quotelev1">&gt; It will display components from OMPI,ORCA,OPAL
</span><br>
<span class="quotelev1">&gt; If you change that too:
</span><br>
<span class="quotelev1">&gt; &#160;../../../ompi/libmpi.la &#160;../../../orte/libopen-rte.la
</span><br>
<span class="quotelev1">&gt; you get the same thing, but if you change it to:
</span><br>
<span class="quotelev1">&gt; &#160;./../../ompi/libmpi.la &#160;../../../orte/libopen-rte.la ./../../ompi/libmpi.la
</span><br>
<span class="quotelev1">&gt; Then it only displays the ORTE,OPAL components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I am thinking that this is an issue with using two .la's in a
</span><br>
<span class="quotelev1">&gt; single linking - something that is not showing up on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any pointers on what might be going on here would be appreciated as I
</span><br>
<span class="quotelev1">&gt; dig further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 26, 2012 at 7:40 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That is odd. I did not see that when testing on Linux. I'll take a look.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jun 26, 2012 at 7:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: it built fine on my Mac, but doesn't run. Just hangs when attempting to execute any MPI application. Will execute non-MPI apps though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking deeper, it looks like the app is stuck waiting to receive the sync registration &quot;ack&quot;. Mpirun thinks it sent it, but the app is unable to receive it, so I would guess the app is failing to progress the RTE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you can't resolve that quickly, I would suggest backing this out and the two of us looking at it in the morning. Somehow, you've lost the progress loop that was driving the RTE thru orte_init.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 26, 2012, at 3:44 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; r26670 is the first of the ORCA commits. I am switching machines for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; testing. Hang on for a couple more hours while the initial testing is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; underway.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Jun 26, 2012 at 4:34 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am requesting a quiet time on the trunk for ORCA integration
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; starting -now- (as previously announced). I will post back when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; everything is committed and ready to go.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Some reading while you are waiting:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;<a href="http://www.open-mpi.org/community/lists/devel/2012/06/11109.php">http://www.open-mpi.org/community/lists/devel/2012/06/11109.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li><strong>Next message:</strong> <a href="11191.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Previous message:</strong> <a href="11189.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>In reply to:</strong> <a href="11189.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11191.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<li><strong>Reply:</strong> <a href="11191.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
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

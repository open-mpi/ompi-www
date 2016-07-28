<?
$subject_val = "Re: [OMPI users] configure/library question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 17:43:10 2013" -->
<!-- isoreceived="20130719214310" -->
<!-- sent="Fri, 19 Jul 2013 16:42:45 -0500" -->
<!-- isosent="20130719214245" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure/library question" -->
<!-- id="CAGKz=uK7arZmAXn9nw0YGAMYeuggJMwKREJqXvUvZiSBpV+W_Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FF9DB805FC41CC4E95825A50F680630217A34264_at_challenger.uhd.campus" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure/library question<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 17:42:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22349.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22340.php">Hodgess, Erin: "Re: [OMPI users] configure/library question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoever designed the application you're trying to use to work only
<br>
with LIBS=&quot;-lmpi&quot; indicates poor software engineering and a
<br>
low-quality application.
<br>
<p>You can install or uninstall whatever you like but it is incorrect to
<br>
think that MPICH is broken because it does not provide libmpi.{a,so}.
<br>
<p>In the absence of a sufficient understanding of how to link against
<br>
MPI, your best bet is to use CC=mpicc (and friends for LD, CXX,
<br>
FC,...).
<br>
<p>Jeff
<br>
<p>On Fri, Jul 19, 2013 at 2:12 PM, Hodgess, Erin &lt;HodgessE_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I figured out how to uninstall and am going to install open mpi
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Erin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of
</span><br>
<span class="quotelev1">&gt; Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, July 19, 2013 2:06 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] configure/library question
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably a lot more familiar to the folks on the MPICH mailing list - this
</span><br>
<span class="quotelev1">&gt; is the mailing list for Open MPI :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 19, 2013, at 12:03 PM, &quot;Hodgess, Erin&quot; &lt;HodgessE_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just downloaded the MPICH 3.0.4 tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I used
</span><br>
<span class="quotelev1">&gt; tar xfvz tar-3.0.4.tar.gz
</span><br>
<span class="quotelev1">&gt; ./configure
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I'm trying to compile someone else's program and it can't find libmpi or
</span><br>
<span class="quotelev1">&gt; libmpich.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did find libmpich.a, but no libmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this sound familiar, please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Erin
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
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22349.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22340.php">Hodgess, Erin: "Re: [OMPI users] configure/library question"</a>
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

<?
$subject_val = "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 16:21:47 2016" -->
<!-- isoreceived="20160719202147" -->
<!-- sent="Tue, 19 Jul 2016 14:21:46 -0600" -->
<!-- isosent="20160719202146" -->
<!-- name="Nathaniel Graham" -->
<!-- email="nrgraham23_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking" -->
<!-- id="CABfhiS0q31=Psns9qjnirP_jykcygBYHoULut+Eqy8rsf565tA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="44B4D18A-B2B6-4B9D-B748-C933699CB770_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking<br>
<strong>From:</strong> Nathaniel Graham (<em>nrgraham23_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 16:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29697.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Previous message:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>In reply to:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29697.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Reply:</strong> <a href="29697.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The prefix location has to be there.  Otherwise ompi attempts to install to
<br>
a read only directory.
<br>
<p>I have the install bin directory added to my path and the lib directory
<br>
added to the LD_LIBRARY_PATH.
<br>
<p>When I run: which mpirun it is pointing to the expected place.
<br>
<p>-Nathan
<br>
<p>On Tue, Jul 19, 2016 at 2:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sounds to me like you have a confused build - I&#226;&#128;&#153;d whack your prefix
</span><br>
<span class="quotelev1">&gt; location and do a &#226;&#128;&#156;make install&#226;&#128;&#157; again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 19, 2016, at 1:04 PM, Nathaniel Graham &lt;nrgraham23_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to run the OSU tests for some results for a poster, but I am
</span><br>
<span class="quotelev1">&gt; getting the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     mpirun: Symbol `orte_schizo' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am building off master with gcc on Red Hat Enterprise Linux Server
</span><br>
<span class="quotelev1">&gt; release 6.7.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My config command is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ./configure --prefix=/users/ngraham/ompi_install --enable-mpi-java
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Everything builds fine, but I get this issue with mpirun.  I am running
</span><br>
<span class="quotelev1">&gt; a Java program, but I do not believe this is Java related.  The mpirun
</span><br>
<span class="quotelev1">&gt; command I am using is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     mpirun -np 2 Java OSUBW
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29694.php">http://www.open-mpi.org/community/lists/users/2016/07/29694.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29695.php">http://www.open-mpi.org/community/lists/users/2016/07/29695.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29696/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29697.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Previous message:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>In reply to:</strong> <a href="29695.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29697.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Reply:</strong> <a href="29697.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
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

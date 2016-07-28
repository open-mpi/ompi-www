<?
$subject_val = "Re: [OMPI users] communicating with the caller";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 12:52:53 2008" -->
<!-- isoreceived="20080325165253" -->
<!-- sent="Tue, 25 Mar 2008 12:52:43 -0400" -->
<!-- isosent="20080325165243" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] communicating with the caller" -->
<!-- id="CABE928D-68ED-49AE-87E5-7B04A22B1956_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0803250937j291e3b7bpe2751859b2fcefdc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] communicating with the caller<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 12:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5269.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Previous message:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>In reply to:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5277.php">slimtimmy_at_[hidden]: "Re: [OMPI users] communicating with the caller"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI-2 standard
<br>
CHAPTER 5. PROCESS CREATION AND MANAGEMENT
<br>
Section 5.4
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 25, 2008, at 12:37 PM, jody wrote:
<br>
<span class="quotelev1">&gt; Could you explain what you mean by &quot;comm accept/connect&quot; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 25, 2008 at 4:06 PM, George Bosilca  
</span><br>
<span class="quotelev1">&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There is a chapter in the MPI standard about this. Usually, people
</span><br>
<span class="quotelev2">&gt;&gt; will use comm accept/connect to do such kind of things. No need to
</span><br>
<span class="quotelev2">&gt;&gt; have your own communication protocol.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2008, at 10:32 AM, slimtimmy_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm new to OpenMPI and would like to know whether there is a common
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for a caller of mpirun to communicate with the mpi processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a setup where one process is responsible for distributing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to other mpi processes and collecting the respective results
</span><br>
<span class="quotelev3">&gt;&gt;&gt; afterwards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now for example I want to enable communication between the master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process and a GUI application. The GUI should be notified by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about progress being made and it should also be possible for the GUI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send commands to the master (so the communication should be possible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both ways)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is stdin/stdout suitable? (is sending binary data a problem with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type of communication?) I also read that the MPI specification does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; say anything about the use of stdin/stdout. Is it safe to assume  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; most common MPI implementations support it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another way to deal with the problem would be to write some custom
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network code that is used alongside the MPI communication. What is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commonly used in this situation?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Timm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5268/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5269.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Previous message:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>In reply to:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5277.php">slimtimmy_at_[hidden]: "Re: [OMPI users] communicating with the caller"</a>
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

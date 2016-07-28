<?
$subject_val = "Re: [OMPI users] communicating with the caller";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 12:37:11 2008" -->
<!-- isoreceived="20080325163711" -->
<!-- sent="Tue, 25 Mar 2008 17:37:03 +0100" -->
<!-- isosent="20080325163703" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] communicating with the caller" -->
<!-- id="9b0da5ce0803250937j291e3b7bpe2751859b2fcefdc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BF91AE35-0B53-4D12-AFF5-00C93D9D659A_at_eecs.utk.edu" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 12:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5268.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Previous message:</strong> <a href="5266.php">Andreas Sch&#228;fer: "[OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>In reply to:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5268.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Reply:</strong> <a href="5268.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you explain what you mean by &quot;comm accept/connect&quot; ?
<br>
<p>jody
<br>
<p>On Tue, Mar 25, 2008 at 4:06 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; There is a chapter in the MPI standard about this. Usually, people
</span><br>
<span class="quotelev1">&gt;  will use comm accept/connect to do such kind of things. No need to
</span><br>
<span class="quotelev1">&gt;  have your own communication protocol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Mar 25, 2008, at 10:32 AM, slimtimmy_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; I'm new to OpenMPI and would like to know whether there is a common
</span><br>
<span class="quotelev2">&gt;  &gt; way
</span><br>
<span class="quotelev2">&gt;  &gt; for a caller of mpirun to communicate with the mpi processes.
</span><br>
<span class="quotelev2">&gt;  &gt; Basically
</span><br>
<span class="quotelev2">&gt;  &gt; I have a setup where one process is responsible for distributing jobs
</span><br>
<span class="quotelev2">&gt;  &gt; to other mpi processes and collecting the respective results
</span><br>
<span class="quotelev2">&gt;  &gt; afterwards.
</span><br>
<span class="quotelev2">&gt;  &gt; Now for example I want to enable communication between the master
</span><br>
<span class="quotelev2">&gt;  &gt; process and a GUI application. The GUI should be notified by the
</span><br>
<span class="quotelev2">&gt;  &gt; master
</span><br>
<span class="quotelev2">&gt;  &gt; about progress being made and it should also be possible for the GUI
</span><br>
<span class="quotelev2">&gt;  &gt; to
</span><br>
<span class="quotelev2">&gt;  &gt; send commands to the master (so the communication should be possible
</span><br>
<span class="quotelev2">&gt;  &gt; in
</span><br>
<span class="quotelev2">&gt;  &gt; both ways)
</span><br>
<span class="quotelev2">&gt;  &gt; Is stdin/stdout suitable? (is sending binary data a problem with this
</span><br>
<span class="quotelev2">&gt;  &gt; type of communication?) I also read that the MPI specification does
</span><br>
<span class="quotelev2">&gt;  &gt; not
</span><br>
<span class="quotelev2">&gt;  &gt; say anything about the use of stdin/stdout. Is it safe to assume that
</span><br>
<span class="quotelev2">&gt;  &gt; most common MPI implementations support it?
</span><br>
<span class="quotelev2">&gt;  &gt; Another way to deal with the problem would be to write some custom
</span><br>
<span class="quotelev2">&gt;  &gt; network code that is used alongside the MPI communication. What is
</span><br>
<span class="quotelev2">&gt;  &gt; commonly used in this situation?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Best regards
</span><br>
<span class="quotelev2">&gt;  &gt; Timm
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5268.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Previous message:</strong> <a href="5266.php">Andreas Sch&#228;fer: "[OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>In reply to:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5268.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Reply:</strong> <a href="5268.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
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

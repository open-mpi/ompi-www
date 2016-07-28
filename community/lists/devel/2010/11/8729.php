<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 12:22:20 2010" -->
<!-- isoreceived="20101129172220" -->
<!-- sent="Mon, 29 Nov 2010 12:22:15 -0500" -->
<!-- isosent="20101129172215" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="B1A15353-E228-4B68-B0DD-B95A1D02DBB2_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7092CE915_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 12:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8730.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8728.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8728.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8731.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8731.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If your code doesn't exactly what is described in the code snippet attached to your previous email, then you can safely ignore the warning. In fact, any fork done prior to the communication is a non-issue, but it is difficult to identify. Therefore, we output the warning as soon as we detect a fork after MPI_Init.
<br>
<p>You can find more information about the usage of fork in Open MPI at <a href="http://www.open-mpi.de/faq/?category=tuning#fork-warning">http://www.open-mpi.de/faq/?category=tuning#fork-warning</a>
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 29, 2010, at 12:12 , &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am posting this question again as it was sent before the long weekend and didn&#146;t see any responses so far. Can anyone please explain the discrepancy I am observing with the scenario explained in the post below?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 23, 2010 2:24 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Warning on fork() disappears if I use MPI threads!!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am running into a very wierd problem.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If I initialize MPI normally ie; with MPI_Init(), and make one of the MPI process to do &quot;popen()&quot; call, I get the following warning/error message:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; == Message start ===
</span><br>
<span class="quotelev1">&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev1">&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev1">&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev1">&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev1">&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev1">&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev1">&gt; == Message end ====
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However this error message goes away, if I initialize MPI with threads ie; MPI_Init_thread(). Can anyone explain this discrepancy?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am giving a snippet of the program that causes this problem:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; == Code snippet start ======
</span><br>
<span class="quotelev1">&gt;     if ( rank == 0) {
</span><br>
<span class="quotelev1">&gt;         output = popen(&quot;ls -l&quot;, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt;         while((c=getc(output))!=EOF)
</span><br>
<span class="quotelev1">&gt;                 printf(&quot;%c&quot;,c);
</span><br>
<span class="quotelev1">&gt;         pclose(output);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; == Code snippet end ======
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If this is a design constraint, how can I overcome this problem.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ananda B Mudar, PMP 
</span><br>
<span class="quotelev1">&gt; Senior Technical Architect 
</span><br>
<span class="quotelev1">&gt; Wipro Technologies 
</span><br>
<span class="quotelev1">&gt; Ph: 972 765 8093
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8730.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8728.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8728.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8731.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8731.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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

<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 18:36:28 2010" -->
<!-- isoreceived="20101129233628" -->
<!-- sent="Mon, 29 Nov 2010 16:36:17 -0700" -->
<!-- isosent="20101129233617" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="443AD0B2-512C-4D61-A302-194B9D844F46_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7092CEC8F_at_usa-mv-msg.wipro.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 18:36:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8738.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8738.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is what one IB vendor says about the issue on their web site (redacted to protect the innocent):
<br>
<p>&quot;At the time of this release, the (redacted-openib) driver has issues with buffers sharing pages when fork( ) is used. Pinned (locked in memory) pages are normally marked copy-on-write during a fork. If a page is pinned before a fork and subsequently written to while RDMA operations are being performed on the same page, silent data corruption can occur as RDMA operations continue to stream data to a page that has moved. To avoid this, the (redacted-openib) driver does not use copy-on-write behavior during a fork for pinned pages. Instead, access to these pages by the child process will result in a segmentation violation.&quot;
<br>
<p>While there is some variation, I believe you will find that all IB comm shares this problem. So it is wise to avoid using fork if you want to use the openib transport.
<br>
<p>Hence the warning. Ignoring it is purely a &quot;user beware&quot; situation, but we provide that mechanism for the truly adventurous...or IB developers who want to someday resolve the problem.
<br>
<p><p>On Nov 29, 2010, at 3:44 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the explanation. I am trying to understand the following line in your mail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#147;In fact, any fork done prior to the communication is a non-issue, but it is difficult to identify. Therefore, we output the warning as soon as we detect a fork after MPI_Init.&#148;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it mean that if I have a fork() after the communication (ie; mpi_send or mpi_receive etc), I may have to relook at a different implementation to be at safe side? I don&#146;t want to suppress the messages if they result in any corruption later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can one be sure that the disabling the warning is ok? Could you please elaborate on what makes forks vulnerable? May be that will guide the developers to make an informed decision on whether to disable them or find another alternative.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------ PREVIOUS MESSAGE ---------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!
</span><br>
<span class="quotelev1">&gt; From: George Bosilca (bosilca_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2010-11-29 12:22:15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next message: Jeff Squyres: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
</span><br>
<span class="quotelev1">&gt; Previous message: ananda.mudar_at_[hidden]: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
</span><br>
<span class="quotelev1">&gt; In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
</span><br>
<span class="quotelev1">&gt; Next in thread: N.M. Maclaren: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
</span><br>
<span class="quotelev1">&gt; Reply: N.M. Maclaren: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
</span><br>
<span class="quotelev1">&gt; If your code doesn't exactly what is described in the code snippet attached to your previous email, then you can safely ignore the warning. In fact, any fork done prior to the communication is a non-issue, but it is difficult to identify. Therefore, we output the warning as soon as we detect a fork after MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can find more information about the usage of fork in Open MPI at <a href="http://www.open-mpi.de/faq/?category=tuning#fork-warning">http://www.open-mpi.de/faq/?category=tuning#fork-warning</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 29, 2010, at 12:12 , &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am posting this question again as it was sent before the long weekend and didn&#146;t see any responses so far. Can anyone please explain the discrepancy I am observing with the scenario explained in the post below? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks 
</span><br>
<span class="quotelev2">&gt; &gt; Ananda 
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, November 23, 2010 2:24 PM 
</span><br>
<span class="quotelev2">&gt; &gt; To: devel_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Warning on fork() disappears if I use MPI threads!! 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am running into a very wierd problem. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I initialize MPI normally ie; with MPI_Init(), and make one of the MPI process to do &quot;popen()&quot; call, I get the following warning/error message: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; == Message start === 
</span><br>
<span class="quotelev2">&gt; &gt; An MPI process has executed an operation involving a call to the 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;fork()&quot; system call to create a child process. Open MPI is currently 
</span><br>
<span class="quotelev2">&gt; &gt; operating in a condition that could result in memory corruption or 
</span><br>
<span class="quotelev2">&gt; &gt; other system errors; your MPI job may hang, crash, or produce silent 
</span><br>
<span class="quotelev2">&gt; &gt; data corruption. The use of fork() (or system() or other calls that 
</span><br>
<span class="quotelev2">&gt; &gt; create child processes) is strongly discouraged. 
</span><br>
<span class="quotelev2">&gt; &gt; == Message end ==== 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However this error message goes away, if I initialize MPI with threads ie; MPI_Init_thread(). Can anyone explain this discrepancy? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am giving a snippet of the program that causes this problem: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; == Code snippet start ====== 
</span><br>
<span class="quotelev2">&gt; &gt; if ( rank == 0) { 
</span><br>
<span class="quotelev2">&gt; &gt; output = popen(&quot;ls -l&quot;, &quot;r&quot;); 
</span><br>
<span class="quotelev2">&gt; &gt; while((c=getc(output))!=EOF) 
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;%c&quot;,c); 
</span><br>
<span class="quotelev2">&gt; &gt; pclose(output); 
</span><br>
<span class="quotelev2">&gt; &gt; } 
</span><br>
<span class="quotelev2">&gt; &gt; == Code snippet end ====== 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If this is a design constraint, how can I overcome this problem. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks 
</span><br>
<span class="quotelev2">&gt; &gt; Ananda 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ananda B Mudar, PMP 
</span><br>
<span class="quotelev2">&gt; &gt; Senior Technical Architect 
</span><br>
<span class="quotelev2">&gt; &gt; Wipro Technologies 
</span><br>
<span class="quotelev2">&gt; &gt; Ph: 972 765 8093              972 765 8093       
</span><br>
<span class="quotelev2">&gt; &gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; www.wipro.com 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________ 
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list 
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; ananda.mudar_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8735/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8738.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8738.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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

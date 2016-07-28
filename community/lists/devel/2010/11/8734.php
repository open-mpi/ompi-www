<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 18:25:40 2010" -->
<!-- isoreceived="20101129232540" -->
<!-- sent="Mon, 29 Nov 2010 18:25:35 -0500" -->
<!-- isosent="20101129232535" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="39825385-1CD1-4F7B-B7E2-1CF21B4E6544_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 18:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2010, at 17:44 , &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
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
<p>The main problem is that openib require to pin memory pages in order to take advantage of RMA features. There is a major issues with these pinned pages and fork, leading to segmentation fault in some specific cases. However, we only pin the pages on the MPI calls related to data transfers. Therefore, if you call fork __before__ any other MPI data transfer function (but after MPI_Init as you use the process rank), your application should be safe.
<br>
<p><span class="quotelev1">&gt; How can one be sure that the disabling the warning is ok? Could you please elaborate on what makes forks vulnerable? May be that will guide the developers to make an informed decision on whether to disable them or find another alternative.
</span><br>
<p>No way to know at 100%. Now for an elaborate answer: Once upon a time ... The fork story is a long and boring one, we would all have preferred to never heard about it (believe me). A quick and compressed version can be found on the QLogic download page (<a href="http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Basic_4400_Rev_A.html">http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Basic_4400_Rev_A.html</a>).
<br>
<p><span class="quotelev1">&gt; Arbitrary fork() support is not supported in the OpenFabrics software stack. If you use fork() in your application, you must not touch any registered memory before calling some form of exec() to launch another process. Calling system() is safe. This limitation includes both native InfiniBand applications and MPI applications using a RDMA based implementation of MPI (such as OFED's openmpi and mvapich).
</span><br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 	&#149; Next message: Jeff Squyres: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
</span><br>
<span class="quotelev1">&gt; 	&#149; Previous message: ananda.mudar_at_[hidden]: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
</span><br>
<span class="quotelev1">&gt; 	&#149; In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
</span><br>
<span class="quotelev1">&gt; 	&#149; Next in thread: N.M. Maclaren: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
</span><br>
<span class="quotelev1">&gt; 	&#149; Reply: N.M. Maclaren: &quot;Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!&quot;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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

<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 17:43:18 2010" -->
<!-- isoreceived="20101129224318" -->
<!-- sent="Mon, 29 Nov 2010 14:44:15 -0800" -->
<!-- isosent="20101129224415" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E7092CEC8F_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
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
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Warning%20on%20fork()%20disappears%20if%20I%20use%20MPI%20threads!!"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-29 17:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8732.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Maybe in reply to:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George
<br>
<p>Thanks for the explanation. I am trying to understand the following line
<br>
in your mail:
<br>
<p>&quot;In fact, any fork done prior to the communication is a non-issue, but
<br>
it is difficult to identify. Therefore, we output the warning as soon as
<br>
we detect a fork after MPI_Init.&quot;
<br>
<p>Does it mean that if I have a fork() after the communication (ie;
<br>
mpi_send or mpi_receive etc), I may have to relook at a different
<br>
implementation to be at safe side? I don't want to suppress the messages
<br>
if they result in any corruption later. 
<br>
<p>How can one be sure that the disabling the warning is ok? Could you
<br>
please elaborate on what makes forks vulnerable? May be that will guide
<br>
the developers to make an informed decision on whether to disable them
<br>
or find another alternative.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>------------------ PREVIOUS MESSAGE ---------------------------------
<br>
<p>Subject: Re: [OMPI devel] Warning on fork() disappears if I use MPI
<br>
threads!!
<br>
From: George Bosilca (bosilca_at_[hidden])
<br>
Date: 2010-11-29 12:22:15 
<br>
<p>*	Next message: Jeff Squyres: &quot;Re: [OMPI devel] Warning on fork()
<br>
disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8730.php">http://www.open-mpi.org/community/lists/devel/2010/11/8730.php</a>&gt;  
<br>
*	Previous message: ananda.mudar_at_[hidden]: &quot;Re: [OMPI devel]
<br>
Warning on fork() disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8728.php">http://www.open-mpi.org/community/lists/devel/2010/11/8728.php</a>&gt;  
<br>
*	In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI devel] Warning
<br>
on fork() disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8728.php">http://www.open-mpi.org/community/lists/devel/2010/11/8728.php</a>&gt;  
<br>
*	Next in thread: N.M. Maclaren: &quot;Re: [OMPI devel] Warning on
<br>
fork() disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8731.php">http://www.open-mpi.org/community/lists/devel/2010/11/8731.php</a>&gt;  
<br>
*	Reply: N.M. Maclaren: &quot;Re: [OMPI devel] Warning on fork()
<br>
disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8731.php">http://www.open-mpi.org/community/lists/devel/2010/11/8731.php</a>&gt;  
<br>
<p>________________________________
<br>
<p>If your code doesn't exactly what is described in the code snippet
<br>
attached to your previous email, then you can safely ignore the warning.
<br>
In fact, any fork done prior to the communication is a non-issue, but it
<br>
is difficult to identify. Therefore, we output the warning as soon as we
<br>
detect a fork after MPI_Init. 
<br>
<p>You can find more information about the usage of fork in Open MPI at
<br>
<a href="http://www.open-mpi.de/faq/?category=tuning#fork-warning">http://www.open-mpi.de/faq/?category=tuning#fork-warning</a> 
<br>
<p>&nbsp;&nbsp;george. 
<br>
<p>On Nov 29, 2010, at 12:12 , &lt;ananda.mudar_at_[hidden]&gt; wrote: 
<br>
<p><span class="quotelev1">&gt; I am posting this question again as it was sent before the long
</span><br>
weekend and didn't see any responses so far. Can anyone please explain
<br>
the discrepancy I am observing with the scenario explained in the post
<br>
below? 
<br>
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
<span class="quotelev1">&gt; If I initialize MPI normally ie; with MPI_Init(), and make one of the
</span><br>
MPI process to do &quot;popen()&quot; call, I get the following warning/error
<br>
message: 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; == Message start === 
</span><br>
<span class="quotelev1">&gt; An MPI process has executed an operation involving a call to the 
</span><br>
<span class="quotelev1">&gt; &quot;fork()&quot; system call to create a child process. Open MPI is currently 
</span><br>
<span class="quotelev1">&gt; operating in a condition that could result in memory corruption or 
</span><br>
<span class="quotelev1">&gt; other system errors; your MPI job may hang, crash, or produce silent 
</span><br>
<span class="quotelev1">&gt; data corruption. The use of fork() (or system() or other calls that 
</span><br>
<span class="quotelev1">&gt; create child processes) is strongly discouraged. 
</span><br>
<span class="quotelev1">&gt; == Message end ==== 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However this error message goes away, if I initialize MPI with threads
</span><br>
ie; MPI_Init_thread(). Can anyone explain this discrepancy? 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am giving a snippet of the program that causes this problem: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; == Code snippet start ====== 
</span><br>
<span class="quotelev1">&gt; if ( rank == 0) { 
</span><br>
<span class="quotelev1">&gt; output = popen(&quot;ls -l&quot;, &quot;r&quot;); 
</span><br>
<span class="quotelev1">&gt; while((c=getc(output))!=EOF) 
</span><br>
<span class="quotelev1">&gt; printf(&quot;%c&quot;,c); 
</span><br>
<span class="quotelev1">&gt; pclose(output); 
</span><br>
<span class="quotelev1">&gt; } 
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
<span class="quotelev1">&gt; Ph: 972 765 8093 begin_of_the_skype_highlighting              972 765
</span><br>
8093      end_of_the_skype_highlighting 
<br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any
</span><br>
attachments to this message are intended for the exclusive use of the
<br>
addressee(s) and may contain proprietary, confidential or privileged
<br>
information. If you are not the intended recipient, you should not
<br>
disseminate, distribute or copy this e-mail. Please notify the sender
<br>
immediately and destroy all copies of this message and any attachments. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
should check this email and any attachments for the presence of viruses.
<br>
The company accepts no liability for any damage caused by any virus
<br>
transmitted by this email. 
<br>
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
<p><p><p>________________________________
<br>
<p>&nbsp;
<br>
<p>Ananda B Mudar, PMP
<br>
<p>Senior Technical Architect
<br>
<p>Wipro Technologies
<br>
<p>Ph: 972 765 8093
<br>
<p>ananda.mudar_at_[hidden]
<br>
<p>&nbsp;
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8733/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8732.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Maybe in reply to:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8734.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Reply:</strong> <a href="8735.php">Ralph Castain: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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

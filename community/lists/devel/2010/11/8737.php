<?
$subject_val = "[OMPI devel] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 00:08:53 2010" -->
<!-- isoreceived="20101130050853" -->
<!-- sent="Mon, 29 Nov 2010 21:07:12 -0800" -->
<!-- isosent="20101130050712" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI devel] (no subject)" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70936D964_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] (no subject)<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20(no%20subject)"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-30 00:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8738.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, George, Ralph
<br>
<p>Thanks a lot for your clarifications!!
<br>
<p>-       Ananda
<br>
<p>----------- PREVIOUS MESSAGE -----------------------
<br>
<p>Subject: Re: [OMPI devel] Warning on fork() disappears if I use MPI
<br>
threads!!
<br>
From: Jeff Squyres (jsquyres_at_[hidden])
<br>
Date: 2010-11-29 19:50:33 
<br>
<p>*	Previous message: Ralph Castain: &quot;Re: [OMPI devel] Warning on
<br>
fork() disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8735.php">http://www.open-mpi.org/community/lists/devel/2010/11/8735.php</a>&gt;  
<br>
*	In reply to: George Bosilca: &quot;Re: [OMPI devel] Warning on fork()
<br>
disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8734.php">http://www.open-mpi.org/community/lists/devel/2010/11/8734.php</a>&gt;  
<br>
*	Next in thread: Ralph Castain: &quot;Re: [OMPI devel] Warning on
<br>
fork() disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8735.php">http://www.open-mpi.org/community/lists/devel/2010/11/8735.php</a>&gt;  
<br>
<p>________________________________
<br>
<p>On Nov 29, 2010, at 6:25 PM, George Bosilca wrote: 
<br>
<p><span class="quotelev1">&gt; The main problem is that openib require to pin memory pages in order
</span><br>
to take advantage of RMA features. There is a major issues with these
<br>
pinned pages and fork, leading to segmentation fault in some specific
<br>
cases. However, we only pin the pages on the MPI calls related to data
<br>
transfers. Therefore, if you call fork __before__ any other MPI data
<br>
transfer function (but after MPI_Init as you use the process rank), your
<br>
application should be safe. 
<br>
<p>Note that Open MPI also pins some internal memory during MPI_INIT, but
<br>
that memory is totally internal to libmpi, so you should be safe (i.e.,
<br>
you should never be able to find it and therefore never be able to try
<br>
to touch it). 
<br>
<p><span class="quotelev2">&gt;&gt; How can one be sure that the disabling the warning is ok? Could you
</span><br>
please elaborate on what makes forks vulnerable? May be that will guide
<br>
the developers to make an informed decision on whether to disable them
<br>
or find another alternative. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No way to know at 100%. Now for an elaborate answer: Once upon a time
</span><br>
... The fork story is a long and boring one, we would all have preferred
<br>
to never heard about it (believe me). A quick and compressed version can
<br>
be found on the QLogic download page
<br>
(<a href="http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Bas">http://filedownloads.qlogic.com/files/driver/70277/release_QLogicIB-Bas</a>
<br>
ic_4400_Rev_A.html). 
<br>
<p>That's a good summary. The issue is with OFED itself, not with Open MPI.
<br>
<p><p>Note, too, that calling popen() should also be safe (even though we'll
<br>
warn about it -- our atfork hook has no way of knowing whether you're
<br>
calling system, popen, or something else). 
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
________________________________
 
 
Ananda B Mudar, PMP
Senior Technical Architect
Wipro Technologies
Ph: 972 765 8093
ananda.mudar_at_[hidden]
 
Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8738.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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

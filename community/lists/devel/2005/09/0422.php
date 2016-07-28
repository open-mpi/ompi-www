<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 15:41:25 2005" -->
<!-- isoreceived="20050927204125" -->
<!-- sent="Tue, 27 Sep 2005 22:41:13 +0200" -->
<!-- isosent="20050927204113" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  bproc question" -->
<!-- id="20050927204113.GA17236_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F6793505-6A6E-4BB9-A507-BC2101A3867C_at_lanl.gov" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-27 15:41:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
<li><strong>Previous message:</strong> <a href="0421.php">Greg Watson: "bproc question"</a>
<li><strong>In reply to:</strong> <a href="0421.php">Greg Watson: "bproc question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Greg,
<br>
<p>* Greg Watson wrote on Tue, Sep 27, 2005 at 10:27:22PM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trying to install ompi on a bproc machine with no network filesystem.  
</span><br>
<span class="quotelev1">&gt; I've copied the contents of the ompi lib directory into /tmp/ompi on  
</span><br>
<span class="quotelev1">&gt; each node and set my LD_LIBRARY_PATH to /tmp/ompi. However when I run  
</span><br>
<span class="quotelev1">&gt; the program, I get the following error. Any suggestions on what else  
</span><br>
<span class="quotelev1">&gt; I need to do?
</span><br>
<p>[ Disclaimer: I don't know much about bproc, so I don't know if this
<br>
applies here ]
<br>
<p>You could try to
<br>
&nbsp;&nbsp;configure --prefix=/tmp/ompi
<br>
and then just
<br>
&nbsp;&nbsp;make install
<br>
there?
<br>
<p>Cheers,
<br>
Ralf
<br>
<p><span class="quotelev1">&gt; [n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; orte_init_stage1.c at line 191
</span><br>
<span class="quotelev1">&gt; [n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; orte_system_init.c at line 39
</span><br>
<span class="quotelev1">&gt; [n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file orte_init.c at  
</span><br>
<span class="quotelev1">&gt; line 47
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
<li><strong>Previous message:</strong> <a href="0421.php">Greg Watson: "bproc question"</a>
<li><strong>In reply to:</strong> <a href="0421.php">Greg Watson: "bproc question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
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

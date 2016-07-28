<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 18 13:47:23 2006" -->
<!-- isoreceived="20060518174723" -->
<!-- sent="Thu, 18 May 2006 13:47:11 -0400" -->
<!-- isosent="20060518174711" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF88102D_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] [OMPI svn-full] svn:open-mpi r9969" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-18 13:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0886.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
<li><strong>Previous message:</strong> <a href="0884.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] tiny Fortran 90 nit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0886.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
<li><strong>Reply:</strong> <a href="0886.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How on earth did this one live for so long?
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: svn-full-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:svn-full-bounces_at_[hidden]] On Behalf Of bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 18, 2006 12:22 PM
</span><br>
<span class="quotelev1">&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r9969
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2006-05-18 12:21:29 EDT (Thu, 18 May 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 9969
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/class/opal_object.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; There should be one gap between the constructors and the 
</span><br>
<span class="quotelev1">&gt; destructors, otherwise
</span><br>
<span class="quotelev1">&gt; the last constructor will be set to NULL overwriting the 
</span><br>
<span class="quotelev1">&gt; first destructor. This
</span><br>
<span class="quotelev1">&gt; prevent us from calling the destructors on some classes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/class/opal_object.c
</span><br>
<span class="quotelev1">&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt; ================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/class/opal_object.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/class/opal_object.c	2006-05-18 12:21:29 EDT 
</span><br>
<span class="quotelev1">&gt; (Thu, 18 May 2006)
</span><br>
<span class="quotelev1">&gt; @@ -112,7 +112,7 @@
</span><br>
<span class="quotelev1">&gt;          perror(&quot;Out of memory&quot;);
</span><br>
<span class="quotelev1">&gt;          exit(-1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    cls-&gt;cls_destruct_array = cls-&gt;cls_construct_array + 
</span><br>
<span class="quotelev1">&gt; cls-&gt;cls_depth;
</span><br>
<span class="quotelev1">&gt; +    cls-&gt;cls_destruct_array = cls-&gt;cls_construct_array + 
</span><br>
<span class="quotelev1">&gt; cls-&gt;cls_depth + 1;
</span><br>
<span class="quotelev1">&gt;      cls_construct_array = cls-&gt;cls_construct_array;
</span><br>
<span class="quotelev1">&gt;      cls_destruct_array  = cls-&gt;cls_destruct_array; 
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0886.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
<li><strong>Previous message:</strong> <a href="0884.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] tiny Fortran 90 nit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0886.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
<li><strong>Reply:</strong> <a href="0886.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
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

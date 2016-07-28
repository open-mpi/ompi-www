<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 18 14:28:41 2006" -->
<!-- isoreceived="20060518182841" -->
<!-- sent="Thu, 18 May 2006 14:28:36 -0400" -->
<!-- isosent="20060518182836" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969" -->
<!-- id="CFC54191-3A58-4137-BD04-A50B44E40915_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF88102D_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-18 14:28:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0887.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Milestone for OMPI"</a>
<li><strong>Previous message:</strong> <a href="0885.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
<li><strong>In reply to:</strong> <a href="0885.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Because we don't really care about the destructors most of the time.  
<br>
I was looking for something else when I realize what was happening  
<br>
over there.
<br>
<p>Same as the trylock one. You see magic is still possible :):)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 18, 2006, at 1:47 PM, Jeff Squyres ((jsquyres)) wrote:
<br>
<p><span class="quotelev1">&gt; How on earth did this one live for so long?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: svn-full-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:svn-full-bounces_at_[hidden]] On Behalf Of  
</span><br>
<span class="quotelev2">&gt;&gt; bosilca_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, May 18, 2006 12:22 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI svn-full] svn:open-mpi r9969
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-05-18 12:21:29 EDT (Thu, 18 May 2006)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 9969
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/opal/class/opal_object.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; There should be one gap between the constructors and the
</span><br>
<span class="quotelev2">&gt;&gt; destructors, otherwise
</span><br>
<span class="quotelev2">&gt;&gt; the last constructor will be set to NULL overwriting the
</span><br>
<span class="quotelev2">&gt;&gt; first destructor. This
</span><br>
<span class="quotelev2">&gt;&gt; prevent us from calling the destructors on some classes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/class/opal_object.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================
</span><br>
<span class="quotelev2">&gt;&gt; ================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/class/opal_object.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/class/opal_object.c	2006-05-18 12:21:29 EDT
</span><br>
<span class="quotelev2">&gt;&gt; (Thu, 18 May 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -112,7 +112,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;          perror(&quot;Out of memory&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          exit(-1);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; -    cls-&gt;cls_destruct_array = cls-&gt;cls_construct_array +
</span><br>
<span class="quotelev2">&gt;&gt; cls-&gt;cls_depth;
</span><br>
<span class="quotelev2">&gt;&gt; +    cls-&gt;cls_destruct_array = cls-&gt;cls_construct_array +
</span><br>
<span class="quotelev2">&gt;&gt; cls-&gt;cls_depth + 1;
</span><br>
<span class="quotelev2">&gt;&gt;      cls_construct_array = cls-&gt;cls_construct_array;
</span><br>
<span class="quotelev2">&gt;&gt;      cls_destruct_array  = cls-&gt;cls_destruct_array;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0887.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Milestone for OMPI"</a>
<li><strong>Previous message:</strong> <a href="0885.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
<li><strong>In reply to:</strong> <a href="0885.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9969"</a>
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

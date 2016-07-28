<?
$subject_val = "Re: [OMPI devel] RFC: revamp OPAL database framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 17:17:18 2014" -->
<!-- isoreceived="20140411211718" -->
<!-- sent="Fri, 11 Apr 2014 21:17:17 +0000" -->
<!-- isosent="20140411211717" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp OPAL database framework" -->
<!-- id="997A86C4-3A28-4EBF-8E80-37AFBAAE4720_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="63C3F897-4628-46F9-8F8C-093156F3C0A8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: revamp OPAL database framework<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 17:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14498.php">Ralph Castain: "[OMPI devel] Trunk datatype warnings"</a>
<li><strong>Previous message:</strong> <a href="14496.php">Ralph Castain: "[OMPI devel] RFC: revamp OPAL database framework"</a>
<li><strong>In reply to:</strong> <a href="14496.php">Ralph Castain: "[OMPI devel] RFC: revamp OPAL database framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On Apr 11, 2014, at 4:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT:    Revamp the opal database framework, including renaming it to &quot;dstore&quot; to reflect that it isn't a &quot;database&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:      The original modex datastore operation became entangled with true database APIs
</span><br>
<span class="quotelev1">&gt;                for things like Postgres. In addition, George has proposed a cleaner separation of modex
</span><br>
<span class="quotelev1">&gt;                data, organized by code layer and perhaps other attributes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:    April 29th, barring issues
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: <a href="https://bitbucket.org/rhc/opal-db">https://bitbucket.org/rhc/opal-db</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****  Details  *****
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;db&quot; framework was originally located in ORTE, and was used for database-related operations in support of the sensor framework. It was then extended to hold and support the modex data, and subsequently moved to the OPAL level in anticipation of the BTLs moving down there. At the current time, it has several APIs relating to modex support, and one API for general database operations. In order to separate out modex info between BTL data that must be shared with peers, data which only needs to be swapped during comm-spawn, and data used only for internal support, we created an &quot;opal_scope_t&quot; and require that you tag your data with one those three scopes when it is &quot;stored&quot;. You then fetch data based on the scope as well as the key.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This change does the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * moves the pure database operations to a new ORTE &quot;db&quot; framework - basically, restoring the database operations to where they used to be. This includes moving the postgres, print, and sqlite components
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * renames the modex datastore framework in OPAL to &quot;dstore&quot;, leaving the hash and pmi components there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have removed the opal_scope_t designation. The modex datastore framework instead now includes the concept of a &quot;handle&quot; that is somewhat equivalent to a POSIX file descriptor. You &quot;open&quot; a datastore and return a handle for that storage area - all subsequent calls to store and fetch data must provide the handle indicating the storage area. Each handle actually translates into a unique module, so the data remains completely isolated from any other handle.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only one datastore component can be selected. Thus, the pmi component now includes its own hash table storage, and we've put the common hash table support code in the datastore base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The database framework operates the same way as the datastore, except that it allows multiple components to be active, and for the caller to specify the desired database backend when &quot;opening&quot; the database handle.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14496.php">http://www.open-mpi.org/community/lists/devel/2014/04/14496.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14498.php">Ralph Castain: "[OMPI devel] Trunk datatype warnings"</a>
<li><strong>Previous message:</strong> <a href="14496.php">Ralph Castain: "[OMPI devel] RFC: revamp OPAL database framework"</a>
<li><strong>In reply to:</strong> <a href="14496.php">Ralph Castain: "[OMPI devel] RFC: revamp OPAL database framework"</a>
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

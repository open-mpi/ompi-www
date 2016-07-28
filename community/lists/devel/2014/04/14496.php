<?
$subject_val = "[OMPI devel] RFC: revamp OPAL database framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 16:08:18 2014" -->
<!-- isoreceived="20140411200818" -->
<!-- sent="Fri, 11 Apr 2014 13:07:18 -0700" -->
<!-- isosent="20140411200718" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: revamp OPAL database framework" -->
<!-- id="63C3F897-4628-46F9-8F8C-093156F3C0A8_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: revamp OPAL database framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 16:07:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14497.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: revamp OPAL database framework"</a>
<li><strong>Previous message:</strong> <a href="14495.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI f2f devel meeting: week of June 23"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14497.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: revamp OPAL database framework"</a>
<li><strong>Reply:</strong> <a href="14497.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: revamp OPAL database framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:    Revamp the opal database framework, including renaming it to &quot;dstore&quot; to reflect that it isn't a &quot;database&quot;
<br>
<p>WHY:      The original modex datastore operation became entangled with true database APIs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for things like Postgres. In addition, George has proposed a cleaner separation of modex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data, organized by code layer and perhaps other attributes
<br>
<p>WHEN:    April 29th, barring issues
<br>
<p>WHERE: <a href="https://bitbucket.org/rhc/opal-db">https://bitbucket.org/rhc/opal-db</a>
<br>
<p>*****  Details  *****
<br>
<p>The &quot;db&quot; framework was originally located in ORTE, and was used for database-related operations in support of the sensor framework. It was then extended to hold and support the modex data, and subsequently moved to the OPAL level in anticipation of the BTLs moving down there. At the current time, it has several APIs relating to modex support, and one API for general database operations. In order to separate out modex info between BTL data that must be shared with peers, data which only needs to be swapped during comm-spawn, and data used only for internal support, we created an &quot;opal_scope_t&quot; and require that you tag your data with one those three scopes when it is &quot;stored&quot;. You then fetch data based on the scope as well as the key.
<br>
<p>This change does the following:
<br>
<p>* moves the pure database operations to a new ORTE &quot;db&quot; framework - basically, restoring the database operations to where they used to be. This includes moving the postgres, print, and sqlite components
<br>
<p>* renames the modex datastore framework in OPAL to &quot;dstore&quot;, leaving the hash and pmi components there.
<br>
<p>We have removed the opal_scope_t designation. The modex datastore framework instead now includes the concept of a &quot;handle&quot; that is somewhat equivalent to a POSIX file descriptor. You &quot;open&quot; a datastore and return a handle for that storage area - all subsequent calls to store and fetch data must provide the handle indicating the storage area. Each handle actually translates into a unique module, so the data remains completely isolated from any other handle.
<br>
<p>Only one datastore component can be selected. Thus, the pmi component now includes its own hash table storage, and we've put the common hash table support code in the datastore base.
<br>
<p>The database framework operates the same way as the datastore, except that it allows multiple components to be active, and for the caller to specify the desired database backend when &quot;opening&quot; the database handle.
<br>
<p>HTH
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14497.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: revamp OPAL database framework"</a>
<li><strong>Previous message:</strong> <a href="14495.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI f2f devel meeting: week of June 23"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14497.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: revamp OPAL database framework"</a>
<li><strong>Reply:</strong> <a href="14497.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: revamp OPAL database framework"</a>
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

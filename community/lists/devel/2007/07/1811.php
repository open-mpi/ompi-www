<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 10:03:29 2007" -->
<!-- isoreceived="20070709140329" -->
<!-- sent="Mon, 9 Jul 2007 10:03:17 -0400" -->
<!-- isosent="20070709140317" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_output_verbose usage guidelines" -->
<!-- id="20AFB2B3-D1D8-4A33-9AD6-B6A239C647D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46923F10.3030408_at_Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 10:03:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1812.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Previous message:</strong> <a href="1810.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>In reply to:</strong> <a href="1810.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1813.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Reply:</strong> <a href="1813.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 9, 2007, at 9:58 AM, Don Kerr wrote:
<br>
<p><span class="quotelev2">&gt;&gt; You want a warning to show when:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. the udapl btl is used
</span><br>
<span class="quotelev2">&gt;&gt; 2. --enable-debug was not configured
</span><br>
<span class="quotelev2">&gt;&gt; 3. the user specifies btl_*_verbose (or btl_*_debug) &gt;= some_value
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that right?  If so, is the intent to warn that somen checks are
</span><br>
<span class="quotelev2">&gt;&gt; not being performed that one would otherwise assume are being
</span><br>
<span class="quotelev2">&gt;&gt; performed (because of #3)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; #1 and #2 is just to convey the environment I expect the user to be
</span><br>
<span class="quotelev1">&gt; running in, not the error case. Interpretation of #3 is a little  
</span><br>
<span class="quotelev1">&gt; askew.
</span><br>
<span class="quotelev1">&gt; uDAPL gets its HCA information from  /etc/dat.conf. This file has an
</span><br>
<span class="quotelev1">&gt; entry for each HCA, even those that are potentially not &quot;UP&quot;. Also it
</span><br>
<span class="quotelev1">&gt; appears the OFED stack includes by default an entry for &quot;OpenIB-bond&quot;
</span><br>
<span class="quotelev1">&gt; which I have not figured out what it is yet.  In anycase uDAPL has
</span><br>
<span class="quotelev1">&gt; trouble distinguishing if an HCA is down intentionally or if is down
</span><br>
<span class="quotelev1">&gt; because something is wrong. So the uDAPL BTL attempts to open all  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; entries in this file.
</span><br>
<p>You might want to ping the OFA general mailing list or the DAT  
<br>
mailing lists with these kinds of questions...?
<br>
<p><span class="quotelev1">&gt; And the issues becomes how much information to
</span><br>
<span class="quotelev1">&gt; toss back to the user. If a node has two IB interfaces but only one is
</span><br>
<span class="quotelev1">&gt; up, do they want see a warning message about one of the interfaces  
</span><br>
<span class="quotelev1">&gt; being
</span><br>
<span class="quotelev1">&gt; down when they already know this by looking at &quot;ifconfig&quot;?  I think  
</span><br>
<span class="quotelev1">&gt; not.
</span><br>
<span class="quotelev1">&gt; But this could be valueable information if there is a real problem.
</span><br>
<p>True.  FWIW, in the openib btl, we only use HCA ports that are active  
<br>
(i.e., have a link signal and have been recognized/allowed on the  
<br>
network by the SM); we silently ignore those that are not active.  We  
<br>
do not currently have a diagnostic that shows which ports are ignored  
<br>
because they are not active, IIRC.
<br>
<p><span class="quotelev1">&gt; Since its just one message at this point I think I will go with the  
</span><br>
<span class="quotelev1">&gt; base
</span><br>
<span class="quotelev1">&gt; output_id and if I need more I will look to create a component  
</span><br>
<span class="quotelev1">&gt; specific
</span><br>
<span class="quotelev1">&gt; id.  Thanks Jeff.
</span><br>
<p>FWIW, we always treat the opal_output_verbose output as optional  
<br>
output.  If there's something that you definitely want to toss back  
<br>
to the user, use opal_show_help.
<br>
<p><span class="quotelev1">&gt; I expect to pursue this in order to find a better way to distinguish
</span><br>
<span class="quotelev1">&gt; between an interface that is up or down but I don't have a solution at
</span><br>
<span class="quotelev1">&gt; the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1812.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Previous message:</strong> <a href="1810.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>In reply to:</strong> <a href="1810.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1813.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Reply:</strong> <a href="1813.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
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

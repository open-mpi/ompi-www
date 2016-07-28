<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 22:32:16 2014" -->
<!-- isoreceived="20140605023216" -->
<!-- sent="Thu, 5 Jun 2014 11:32:14 +0900" -->
<!-- isosent="20140605023214" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="CAAkFZ5tQOtNXZ8BqvN3h6=8cm44AEvosY16Ea==ectHtu_hurA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="773F8C1D-273C-41A3-AB92-0DECE238669C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-04 22:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14973.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14971.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14971.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14973.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14973.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralf,
<br>
<p>for the time being, i just found a workaround
<br>
--mca oob_tcp_if_include eth0
<br>
<p>Generally speaking, is openmpi doing the wiser thing ?
<br>
here is what i mean :
<br>
the cluster i work on (4k+ nodes) each node has two ip interfaces :
<br>
&nbsp;* eth0 (gigabit ethernet) : because of the cluster size, several subnets
<br>
are used.
<br>
&nbsp;* ib0 (IP over IB) : only one subnet
<br>
i can easily understand such a large cluster is not so common, but on the
<br>
other hand i do not believe the IP configuration (subnetted gigE and single
<br>
subnet IPoIB) can be called exotic.
<br>
<p>if nodes from different eth0 subnets are used, and if i understand
<br>
correctly your previous replies, orte will &quot;discard&quot; eth0 because nodes
<br>
cannot contact each other &quot;directly&quot;.
<br>
directly means the nodes are not on the same subnet. that being said, they
<br>
can communicate via IP thanks to IP routing (i mean IP routing, i do *not*
<br>
mean orte routing).
<br>
that means orte communications will use IPoIB which might not be the best
<br>
thing to do since establishing an IPoIB connection can be long (especially
<br>
at scale *and* if the arp table is not populated)
<br>
<p>is my understanding correct so far ?
<br>
<p>bottom line, i would have expected openmpi uses eth0 regardless IP routing
<br>
is required, and ib0 is simply not used (or eventually used as a fallback
<br>
option)
<br>
<p>this leads to my next question : is the current default ok ? if not should
<br>
we change it and how ?
<br>
/*
<br>
imho :
<br>
&nbsp;- IP routing is not always a bad/slow thing
<br>
&nbsp;- gigE can sometimes be better than IPoIB)
<br>
*/
<br>
<p>i am fine if at the end :
<br>
- this issue is fixed
<br>
- we decide it is up to the sysadmin to make --mca oob_tcp_if_include eth0
<br>
the default if this is really thought to be best for the cluster. (and i
<br>
can try to draft a faq if needed)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wed, Jun 4, 2014 at 11:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll work on it - may take a day or two to really fix. Only impacts
</span><br>
<span class="quotelev1">&gt; systems with mismatched interfaces, which is why we aren't generally seeing
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14972/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14973.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14971.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14971.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14973.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14973.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14977.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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

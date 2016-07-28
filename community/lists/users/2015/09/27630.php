<?
$subject_val = "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 21:27:30 2015" -->
<!-- isoreceived="20150919012730" -->
<!-- sent="Sat, 19 Sep 2015 01:27:27 +0000" -->
<!-- isosent="20150919012727" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI" -->
<!-- id="9B8C3FE0-B322-4DC8-A949-874923A41222_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sHkqLHr9dO2Q06H2kjZfNDahJNtOQZFRbcZdK3ubVQZw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open	MPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 21:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27631.php">George Bosilca: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27631.php">George Bosilca: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2015, at 7:26 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I built a similar environment with master and private ip and that does not work.
</span><br>
<span class="quotelev1">&gt; my understanding is each tasks has two tcp btl (one per interface),
</span><br>
<span class="quotelev1">&gt; and there is currently no mechanism to tell that a node is unreachable
</span><br>
<span class="quotelev1">&gt; via a given btl.
</span><br>
<span class="quotelev1">&gt; (a btl picks the &quot;best&quot; interface for each node, but it never picks zero interface)
</span><br>
<p>Mmm... yes.  I'll bet you're right.
<br>
<p><span class="quotelev1">&gt; in order to support this, we should add extra checks to ensure the best interface is reachable
</span><br>
<span class="quotelev1">&gt; (that could be achieved &quot;statically&quot; by parsing the routing tables, or &quot;dynamically&quot; by &quot;pinging&quot; the remote interface)
</span><br>
<p>The usNIC BTL does this by doing ARP lookups using libnl (or libnl3).
<br>
<p><span class="quotelev1">&gt; On master, there is a reachable framework. Could/should the tcp btl simply use it ?
</span><br>
<p>This is the framework that Ralph and I discussed -- he was going to take some of the ideas that the usnic BTL uses and put it in common functionality for exactly this kind of thing (e.g., so that the TCP BTL could use it).  I haven't looked at it, though, and don't know what the current status of it is.  Ralph?
<br>
<p>There's basically one access function in reachable.h:
<br>
<p><pre>
----
/* Given a list of local interfaces and a list of remote
 * interfaces, return the interface that is the &quot;best&quot;
 * for connecting to the remote process.
 *
 * local_if: list of local opal_if_t interfaces
 * remote_if: list of opal_if_t interfaces for the remote
 *            process
 *
 * return value: pointer to opal_if_t on local_if that is
 *               the &quot;best&quot; option for connecting. NULL
 *               indicates that the remote process cannot
 *               be reached on any interface
 */
typedef opal_if_t*
(*opal_reachable_base_module_reachable_fn_t)(opal_list_t *local_if,
                                             opal_list_t *remote_if);
-----
That sounds just about perfect for getting rid of heuristics in the TCP BTL and replacing them with &quot;yes, you can actually reach A from B.&quot;
Do you want to take a crack at a PR for master for using the reachable framework in the TCP BTL?
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27631.php">George Bosilca: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27629.php">Gilles Gouaillardet: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27631.php">George Bosilca: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
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

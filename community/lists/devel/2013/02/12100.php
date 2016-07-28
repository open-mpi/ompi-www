<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 20:03:10 2013" -->
<!-- isoreceived="20130202010310" -->
<!-- sent="Sat, 2 Feb 2013 01:02:15 +0000" -->
<!-- isosent="20130202010215" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC3218_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkUzbsCbMMPYmzkWWgxJ6kQncc2sZ34-Sy8fkAnetAeOPQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-01 20:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12101.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 1, 2013, at 7:09 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I did not say we abort, I say we prevent BTL TCP from being used.
</span><br>
<p>Ah.
<br>
<p><span class="quotelev1">&gt; In your example, I guess the TCP is disabled but the PML finds another
</span><br>
<span class="quotelev1">&gt; available interface and keeps going. If I try the same thing with
</span><br>
<span class="quotelev1">&gt; &quot;--mca btl tcp,self&quot; it does abort on my cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca btl tcp,self --mca btl_tcp_if_include eth3 ./ring_c
</span><br>
<span class="quotelev1">&gt; [dancer02][[48001,1],1][../../../../../ompi/ompi/mca/btl/tcp/btl_tcp_component.c:682:mca_btl_tcp_component_create_instances]
</span><br>
<span class="quotelev1">&gt; invalid interface &quot;eth3&quot;
</span><br>
<p>Good point.
<br>
<p>But it looks like that behavior doesn't occur for btl_tcp_if_exclude:
<br>
<p>------
<br>
[16:57] savbu-usnic:~/svn/ompi-1.6/examples % mpirun --host node001,node002 --mca btl tcp,self --mca btl_tcp_if_exclude lo,bogus ring_c
<br>
Process 0 sending 10 to 1, tag 201 (2 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
Process 1 exiting
<br>
[16:58] savbu-usnic:~/svn/ompi-1.6/examples % 
<br>
------
<br>
<p>So it sounds like I should:
<br>
<p>1. put if_seq back the way it was
<br>
2. fix the if_seq show_help message to say that TCP won't be used (right now it just says that the value will be ignored -- which is one of the other reasons I changed the behavior to ignore the value)
<br>
3. make btl_tcp_if_exclude exhibit the same behavior (if a bogus interface is specified, disable TCP)
<br>
4. make all error cases nice-nice with show_help instead of BTL_VERBOSE :-)
<br>
<p>Agree?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12101.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
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

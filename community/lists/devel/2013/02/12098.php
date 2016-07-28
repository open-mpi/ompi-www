<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 18:50:12 2013" -->
<!-- isoreceived="20130201235012" -->
<!-- sent="Fri, 1 Feb 2013 23:50:07 +0000" -->
<!-- isosent="20130201235007" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC2F43_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkWghL-AvdTwFvOaPW2MN2JD6vdYi2p7p+_kCtnUQmxzcQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-02-01 18:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12097.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12097.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 1, 2013, at 6:28 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So far, all interfaces specified via MCA parameters for the BTL TCP
</span><br>
<span class="quotelev1">&gt; are required to exist. Otherwise an error message is printed and an
</span><br>
<span class="quotelev1">&gt; error returned to the upper level, with the intent that no BTLs of
</span><br>
<span class="quotelev1">&gt; this type will be enabled (as an example btl_tcp_component.c:682).
</span><br>
<p>Actually, it doesn't -- that's why I made this one match the other behavior.  
<br>
<p>For example, if I exclude an interface that doesn't exist (on v1.6 HEAD):
<br>
<p>-----
<br>
[15:40] savbu-usnic:~/svn/ompi-1.6/examples % mpirun -np 2 --mca btl_tcp_if_exclude lo,bogus ring_c
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
[15:40] savbu-usnic:~/svn/ompi-1.6/examples % 
<br>
-----
<br>
<p>Or if I include an interface that doesn't exist (although this one warns):
<br>
<p>-----
<br>
[15:40] savbu-usnic:~/svn/ompi-1.6/examples % mpirun -np 2 --mca btl_tcp_if_include eth0,bogus ring_c
<br>
[savbu-usnic][[7221,1],0][btl_tcp_component.c:682:mca_btl_tcp_component_create_instances] invalid interface &quot;bogus&quot;
<br>
[savbu-usnic][[7221,1],1][btl_tcp_component.c:682:mca_btl_tcp_component_create_instances] invalid interface &quot;bogus&quot;
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
[15:42] savbu-usnic:~/svn/ompi-1.6/examples % 
<br>
-----
<br>
<p>Are there other cases that I'm missing where we *do* abort?
<br>
<p>If so, we should probably be consistent: pick one way (abort or not abort) and do that in all cases.  I don't think I have much of an opinion here on which way we should go; I can see multiple arguments:
<br>
<p>- We should abort: we have a large precedent in many other place in OMPI that if a human asks for something OMPI can't deliver, we abort and make the human figure it out.
<br>
<p>- We should warn/not abort: this is the behavior we've had for a long time.  Changing it may break backwards compatibility.
<br>
<p><p><p><span class="quotelev1">&gt; If I correctly understand your commit, it change this [so far
</span><br>
<span class="quotelev1">&gt; consistent] behavior for a single of our TCP MCA parameter (if_seq)
</span><br>
<span class="quotelev1">&gt; to: print an error message and then continue. As you set
</span><br>
<span class="quotelev1">&gt; themca_btl_tcp_component.tcp_if_seq to NULL this is as if this
</span><br>
<span class="quotelev1">&gt; argument was never provided.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I prefer the old behavior for its corrective meaning (you fix it and
</span><br>
<span class="quotelev1">&gt; then it works), as well as for its consistency with the other BTL TCP
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 1, 2013 at 3:17 PM,  &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-02-01 15:17:43 EST (Fri, 01 Feb 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 28016
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28016">https://svn.open-mpi.org/trac/ompi/changeset/28016</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; As the help message states, it's not an ''error'' if the specified
</span><br>
<span class="quotelev2">&gt;&gt; interface is not found.  It should just be skipped.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_component.c |     8 +++++---
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 5 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c  Fri Feb  1 09:27:37 2013        (r28015)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c  2013-02-01 15:17:43 EST (Fri, 01 Feb 2013)      (r28016)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -314,10 +314,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                ompi_process_info.nodename,
</span><br>
<span class="quotelev2">&gt;&gt;                                mca_btl_tcp_component.tcp_if_seq,
</span><br>
<span class="quotelev2">&gt;&gt;                                &quot;Interface does not exist&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -                return OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt; +                free(mca_btl_tcp_component.tcp_if_seq);
</span><br>
<span class="quotelev2">&gt;&gt; +                mca_btl_tcp_component.tcp_if_seq = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +            } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                BTL_VERBOSE((&quot;Node rank %d using TCP interface %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                             node_rank, mca_btl_tcp_component.tcp_if_seq));
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt; -            BTL_VERBOSE((&quot;Node rank %d using TCP interface %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                         node_rank, mca_btl_tcp_component.tcp_if_seq));
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12097.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12097.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12099.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
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

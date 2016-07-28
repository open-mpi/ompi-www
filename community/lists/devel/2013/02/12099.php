<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 19:09:21 2013" -->
<!-- isoreceived="20130202000921" -->
<!-- sent="Fri, 1 Feb 2013 19:09:16 -0500" -->
<!-- isosent="20130202000916" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp" -->
<!-- id="CAMJJpkUzbsCbMMPYmzkWWgxJ6kQncc2sZ34-Sy8fkAnetAeOPQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC2F43_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-01 19:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12100.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12100.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12100.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did not say we abort, I say we prevent BTL TCP from being used. In
<br>
your example, I guess the TCP is disabled but the PML finds another
<br>
available interface and keeps going. If I try the same thing with
<br>
&quot;--mca btl tcp,self&quot; it does abort on my cluster.
<br>
<p><pre>
---
mpirun -np 2 --mca btl tcp,self --mca btl_tcp_if_include eth3 ./ring_c
[dancer02][[48001,1],1][../../../../../ompi/ompi/mca/btl/tcp/btl_tcp_component.c:682:mca_btl_tcp_component_create_instances]
invalid interface &quot;eth3&quot;
[dancer01][[48001,1],0][../../../../../ompi/ompi/mca/btl/tcp/btl_tcp_component.c:682:mca_btl_tcp_component_create_instances]
invalid interface &quot;eth3&quot;
--------------------------------------------------------------------------
At least one pair of MPI processes are unable to reach each other for
MPI communications.  This means that no Open MPI device has indicated
that it can be used to communicate between these processes.  This is
an error; Open MPI requires that all MPI processes be able to reach
each other.  This error can sometimes be the result of forgetting to
specify the &quot;self&quot; BTL.
  Process 1 ([[48001,1],0]) is on host: node01
  Process 2 ([[48001,1],1]) is on host: node02
  BTLs attempted: self
Your MPI job is now going to abort; sorry.
---
The only reason I see for having the if_seq in first place, it to
nicely balance the TCP traffic over multiple interfaces. As your patch
set the if_seq to NULL, it basically allows the TCP BTL to use __all__
available interfaces, reaching exactly the opposite compared to the
usage of the if_seq specified by the user. As a result the application
will execute over all available interfaces, the result (especially in
terms of performance) might not be what the users expected. Very
confusing from my perspective.
  George.
On Fri, Feb 1, 2013 at 6:50 PM, Jeff Squyres (jsquyres)
&lt;jsquyres_at_[hidden]&gt; wrote:
&gt; On Feb 1, 2013, at 6:28 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; So far, all interfaces specified via MCA parameters for the BTL TCP
&gt;&gt; are required to exist. Otherwise an error message is printed and an
&gt;&gt; error returned to the upper level, with the intent that no BTLs of
&gt;&gt; this type will be enabled (as an example btl_tcp_component.c:682).
&gt;
&gt; Actually, it doesn't -- that's why I made this one match the other behavior.
&gt;
&gt; For example, if I exclude an interface that doesn't exist (on v1.6 HEAD):
&gt;
&gt; -----
&gt; [15:40] savbu-usnic:~/svn/ompi-1.6/examples % mpirun -np 2 --mca btl_tcp_if_exclude lo,bogus ring_c
&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
&gt; Process 0 sent to 1
&gt; Process 0 decremented value: 9
&gt; Process 0 decremented value: 8
&gt; Process 0 decremented value: 7
&gt; Process 0 decremented value: 6
&gt; Process 0 decremented value: 5
&gt; Process 0 decremented value: 4
&gt; Process 0 decremented value: 3
&gt; Process 0 decremented value: 2
&gt; Process 0 decremented value: 1
&gt; Process 0 decremented value: 0
&gt; Process 0 exiting
&gt; Process 1 exiting
&gt; [15:40] savbu-usnic:~/svn/ompi-1.6/examples %
&gt; -----
&gt;
&gt; Or if I include an interface that doesn't exist (although this one warns):
&gt;
&gt; -----
&gt; [15:40] savbu-usnic:~/svn/ompi-1.6/examples % mpirun -np 2 --mca btl_tcp_if_include eth0,bogus ring_c
&gt; [savbu-usnic][[7221,1],0][btl_tcp_component.c:682:mca_btl_tcp_component_create_instances] invalid interface &quot;bogus&quot;
&gt; [savbu-usnic][[7221,1],1][btl_tcp_component.c:682:mca_btl_tcp_component_create_instances] invalid interface &quot;bogus&quot;
&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
&gt; Process 0 sent to 1
&gt; Process 0 decremented value: 9
&gt; Process 0 decremented value: 8
&gt; Process 0 decremented value: 7
&gt; Process 0 decremented value: 6
&gt; Process 0 decremented value: 5
&gt; Process 0 decremented value: 4
&gt; Process 0 decremented value: 3
&gt; Process 0 decremented value: 2
&gt; Process 0 decremented value: 1
&gt; Process 0 decremented value: 0
&gt; Process 0 exiting
&gt; Process 1 exiting
&gt; [15:42] savbu-usnic:~/svn/ompi-1.6/examples %
&gt; -----
&gt;
&gt; Are there other cases that I'm missing where we *do* abort?
&gt;
&gt; If so, we should probably be consistent: pick one way (abort or not abort) and do that in all cases.  I don't think I have much of an opinion here on which way we should go; I can see multiple arguments:
&gt;
&gt; - We should abort: we have a large precedent in many other place in OMPI that if a human asks for something OMPI can't deliver, we abort and make the human figure it out.
&gt;
&gt; - We should warn/not abort: this is the behavior we've had for a long time.  Changing it may break backwards compatibility.
&gt;
&gt;
&gt;
&gt;&gt; If I correctly understand your commit, it change this [so far
&gt;&gt; consistent] behavior for a single of our TCP MCA parameter (if_seq)
&gt;&gt; to: print an error message and then continue. As you set
&gt;&gt; themca_btl_tcp_component.tcp_if_seq to NULL this is as if this
&gt;&gt; argument was never provided.
&gt;&gt;
&gt;&gt; I prefer the old behavior for its corrective meaning (you fix it and
&gt;&gt; then it works), as well as for its consistency with the other BTL TCP
&gt;&gt; parameters.
&gt;&gt;
&gt;&gt;  George.
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; On Fri, Feb 1, 2013 at 3:17 PM,  &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
&gt;&gt;&gt; Author: jsquyres (Jeff Squyres)
&gt;&gt;&gt; Date: 2013-02-01 15:17:43 EST (Fri, 01 Feb 2013)
&gt;&gt;&gt; New Revision: 28016
&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28016">https://svn.open-mpi.org/trac/ompi/changeset/28016</a>
&gt;&gt;&gt;
&gt;&gt;&gt; Log:
&gt;&gt;&gt; As the help message states, it's not an ''error'' if the specified
&gt;&gt;&gt; interface is not found.  It should just be skipped.
&gt;&gt;&gt;
&gt;&gt;&gt; Text files modified:
&gt;&gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_component.c |     8 +++++---
&gt;&gt;&gt;   1 files changed, 5 insertions(+), 3 deletions(-)
&gt;&gt;&gt;
&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
&gt;&gt;&gt; ==============================================================================
&gt;&gt;&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c  Fri Feb  1 09:27:37 2013        (r28015)
&gt;&gt;&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c  2013-02-01 15:17:43 EST (Fri, 01 Feb 2013)      (r28016)
&gt;&gt;&gt; @@ -314,10 +314,12 @@
&gt;&gt;&gt;                                ompi_process_info.nodename,
&gt;&gt;&gt;                                mca_btl_tcp_component.tcp_if_seq,
&gt;&gt;&gt;                                &quot;Interface does not exist&quot;);
&gt;&gt;&gt; -                return OMPI_ERR_BAD_PARAM;
&gt;&gt;&gt; +                free(mca_btl_tcp_component.tcp_if_seq);
&gt;&gt;&gt; +                mca_btl_tcp_component.tcp_if_seq = NULL;
&gt;&gt;&gt; +            } else {
&gt;&gt;&gt; +                BTL_VERBOSE((&quot;Node rank %d using TCP interface %s&quot;,
&gt;&gt;&gt; +                             node_rank, mca_btl_tcp_component.tcp_if_seq));
&gt;&gt;&gt;             }
&gt;&gt;&gt; -            BTL_VERBOSE((&quot;Node rank %d using TCP interface %s&quot;,
&gt;&gt;&gt; -                         node_rank, mca_btl_tcp_component.tcp_if_seq));
&gt;&gt;&gt;         }
&gt;&gt;&gt;     }
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; svn mailing list
&gt;&gt;&gt; svn_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12100.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12100.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12100.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
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

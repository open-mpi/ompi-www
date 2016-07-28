<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 18:28:09 2013" -->
<!-- isoreceived="20130201232809" -->
<!-- sent="Fri, 1 Feb 2013 18:28:04 -0500" -->
<!-- isosent="20130201232804" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp" -->
<!-- id="CAMJJpkWghL-AvdTwFvOaPW2MN2JD6vdYi2p7p+_kCtnUQmxzcQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130201201743.EDE65160F3F_at_tiger.crest.iu.edu" -->
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
<strong>Date:</strong> 2013-02-01 18:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12096.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: shiny new variable subsystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>So far, all interfaces specified via MCA parameters for the BTL TCP
<br>
are required to exist. Otherwise an error message is printed and an
<br>
error returned to the upper level, with the intent that no BTLs of
<br>
this type will be enabled (as an example btl_tcp_component.c:682).
<br>
<p>If I correctly understand your commit, it change this [so far
<br>
consistent] behavior for a single of our TCP MCA parameter (if_seq)
<br>
to: print an error message and then continue. As you set
<br>
themca_btl_tcp_component.tcp_if_seq to NULL this is as if this
<br>
argument was never provided.
<br>
<p>I prefer the old behavior for its corrective meaning (you fix it and
<br>
then it works), as well as for its consistency with the other BTL TCP
<br>
parameters.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Fri, Feb 1, 2013 at 3:17 PM,  &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; Date: 2013-02-01 15:17:43 EST (Fri, 01 Feb 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 28016
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28016">https://svn.open-mpi.org/trac/ompi/changeset/28016</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; As the help message states, it's not an ''error'' if the specified
</span><br>
<span class="quotelev1">&gt; interface is not found.  It should just be skipped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_component.c |     8 +++++---
</span><br>
<span class="quotelev1">&gt;    1 files changed, 5 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c  Fri Feb  1 09:27:37 2013        (r28015)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c  2013-02-01 15:17:43 EST (Fri, 01 Feb 2013)      (r28016)
</span><br>
<span class="quotelev1">&gt; @@ -314,10 +314,12 @@
</span><br>
<span class="quotelev1">&gt;                                 ompi_process_info.nodename,
</span><br>
<span class="quotelev1">&gt;                                 mca_btl_tcp_component.tcp_if_seq,
</span><br>
<span class="quotelev1">&gt;                                 &quot;Interface does not exist&quot;);
</span><br>
<span class="quotelev1">&gt; -                return OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt; +                free(mca_btl_tcp_component.tcp_if_seq);
</span><br>
<span class="quotelev1">&gt; +                mca_btl_tcp_component.tcp_if_seq = NULL;
</span><br>
<span class="quotelev1">&gt; +            } else {
</span><br>
<span class="quotelev1">&gt; +                BTL_VERBOSE((&quot;Node rank %d using TCP interface %s&quot;,
</span><br>
<span class="quotelev1">&gt; +                             node_rank, mca_btl_tcp_component.tcp_if_seq));
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;Node rank %d using TCP interface %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                         node_rank, mca_btl_tcp_component.tcp_if_seq));
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12096.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: shiny new variable subsystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
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

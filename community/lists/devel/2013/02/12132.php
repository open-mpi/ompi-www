<?
$subject_val = "Re: [OMPI devel] mpi/java question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 12:37:29 2013" -->
<!-- isoreceived="20130220173729" -->
<!-- sent="Wed, 20 Feb 2013 09:37:21 -0800" -->
<!-- isosent="20130220173721" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi/java question" -->
<!-- id="5B1FBF29-B9DE-49BC-A66D-937E040206F8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F4CB8F_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpi/java question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 12:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12133.php">Eugene Loh: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>Previous message:</strong> <a href="12131.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>In reply to:</strong> <a href="12130.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's what I found:
<br>
<p><span class="quotelev1">&gt; In Java, a long is always 64 bits. In C and Objective-C, a long might be 64 bits, or it might be 32 bits, or (in less common cases) it might be something else entirely; the C standard doesn't specify an exact bit width.
</span><br>
<p><p><p>So we may need a configure test to map the Java &quot;long&quot; data type to the right thing to get int64_t?
<br>
<p><p>On Feb 20, 2013, at 7:41 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I guess the question is whether a java &quot;long&quot; is equivalent to a C &quot;long&quot;, &quot;long long&quot;, or &quot;long int&quot;...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know?  (I'm not much of a Java guy)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2013, at 7:22 PM, Steve Angelovich &lt;SAngelovich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We ran into a  problem using openmpi from java with a Java data type of long when doing bcast and reduce operations.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Allreduce: the reduction operation MPI_MIN is not defined on the MPI_LONG_INT datatype
</span><br>
<span class="quotelev2">&gt;&gt; *** reported by process [211105480705,0]
</span><br>
<span class="quotelev2">&gt;&gt; *** on communicator MPI COMMUNICATOR 4 DUP FROM 0
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev2">&gt;&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looking at ompi/mpi/java/c/mpi_Datatype.c it looks like an MPI_LONG_INT type is being used.  It seems this should be an MPI_LONG_LONG.  If I change this data type I'm able to do bcast and reduce operations via the java interface.  Does this look like a bug or am I missing something else?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --- openmpi-1.7rc6/ompi/mpi/java/c/mpi_Datatype.c       2013-02-19 15:44:13.299046000 -0600
</span><br>
<span class="quotelev2">&gt;&gt; +++ openmpi-1.9a1r28069/ompi/mpi/java/c/mpi_Datatype.c  2013-02-17 20:00:14.000000000 -0600
</span><br>
<span class="quotelev2">&gt;&gt; @@ -60,7 +60,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Datatype Dts[] = { MPI_DATATYPE_NULL, MPI_BYTE,  MPI_SHORT,
</span><br>
<span class="quotelev2">&gt;&gt;                        MPI_SHORT,         MPI_BYTE,  MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt; -                       MPI_LONG_LONG,      MPI_FLOAT, MPI_DOUBLE,
</span><br>
<span class="quotelev2">&gt;&gt; +                       MPI_LONG_INT,      MPI_FLOAT, MPI_DOUBLE,
</span><br>
<span class="quotelev2">&gt;&gt;                        MPI_PACKED,        MPI_LB,    MPI_UB,
</span><br>
<span class="quotelev2">&gt;&gt;                        MPI_BYTE };
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Steve
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail, including any attached files, may contain confidential and privileged information for the sole use of the intended recipient.  Any review, use, distribution, or disclosure by others is strictly prohibited.  If you are not the intended recipient (or authorized to receive information for the intended recipient), please contact the sender by reply e-mail and delete all copies of this message.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12133.php">Eugene Loh: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>Previous message:</strong> <a href="12131.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>In reply to:</strong> <a href="12130.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
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

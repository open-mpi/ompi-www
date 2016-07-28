<?
$subject_val = "Re: [OMPI devel] mpi/java question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 10:41:43 2013" -->
<!-- isoreceived="20130220154143" -->
<!-- sent="Wed, 20 Feb 2013 15:41:37 +0000" -->
<!-- isosent="20130220154137" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi/java question" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F4CB8F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7884BCDCDF0B084E9B380CD8AB04D786138529_at_NP1EXMB025.corp.halliburton.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 10:41:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12131.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>Previous message:</strong> <a href="12129.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12128.php">Steve Angelovich: "[OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess the question is whether a java &quot;long&quot; is equivalent to a C &quot;long&quot;, &quot;long long&quot;, or &quot;long int&quot;...
<br>
<p>Do you know?  (I'm not much of a Java guy)
<br>
<p><p>On Feb 19, 2013, at 7:22 PM, Steve Angelovich &lt;SAngelovich_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We ran into a  problem using openmpi from java with a Java data type of long when doing bcast and reduce operations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Allreduce: the reduction operation MPI_MIN is not defined on the MPI_LONG_INT datatype
</span><br>
<span class="quotelev1">&gt; *** reported by process [211105480705,0]
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI COMMUNICATOR 4 DUP FROM 0
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at ompi/mpi/java/c/mpi_Datatype.c it looks like an MPI_LONG_INT type is being used.  It seems this should be an MPI_LONG_LONG.  If I change this data type I'm able to do bcast and reduce operations via the java interface.  Does this look like a bug or am I missing something else?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.7rc6/ompi/mpi/java/c/mpi_Datatype.c       2013-02-19 15:44:13.299046000 -0600
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.9a1r28069/ompi/mpi/java/c/mpi_Datatype.c  2013-02-17 20:00:14.000000000 -0600
</span><br>
<span class="quotelev1">&gt; @@ -60,7 +60,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Datatype Dts[] = { MPI_DATATYPE_NULL, MPI_BYTE,  MPI_SHORT,
</span><br>
<span class="quotelev1">&gt;                         MPI_SHORT,         MPI_BYTE,  MPI_INT,
</span><br>
<span class="quotelev1">&gt; -                       MPI_LONG_LONG,      MPI_FLOAT, MPI_DOUBLE,
</span><br>
<span class="quotelev1">&gt; +                       MPI_LONG_INT,      MPI_FLOAT, MPI_DOUBLE,
</span><br>
<span class="quotelev1">&gt;                         MPI_PACKED,        MPI_LB,    MPI_UB,
</span><br>
<span class="quotelev1">&gt;                         MPI_BYTE };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Steve
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This e-mail, including any attached files, may contain confidential and privileged information for the sole use of the intended recipient.  Any review, use, distribution, or disclosure by others is strictly prohibited.  If you are not the intended recipient (or authorized to receive information for the intended recipient), please contact the sender by reply e-mail and delete all copies of this message.
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12131.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>Previous message:</strong> <a href="12129.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12128.php">Steve Angelovich: "[OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
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

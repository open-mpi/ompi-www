<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 00:10:22 2016" -->
<!-- isoreceived="20160115051022" -->
<!-- sent="Fri, 15 Jan 2016 14:10:08 +0900" -->
<!-- isosent="20160115051008" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="56987F30.8040906_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkWTj4ikYX-q21qfkQou8YbwxzpyG0XhNKxq4OfwGh-Ccg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-15 00:10:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28259.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim,
<br>
<p>so OpenMPI will not be updated before the MPI standard is updated.
<br>
<p><p>as George pointed, you can simply :
<br>
<p>mpirun --mca mpi_param_check 0 ...
<br>
<p>in order to disable MPI parameter checks, and that is enough to get your 
<br>
program working as is.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/15/2016 12:33 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; On Thu, Jan 14, 2016 at 7:49 PM, Jeff Hammond &lt;jeff.science_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jeff.science_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Thu, Jan 14, 2016 at 3:05 PM, George Bosilca
</span><br>
<span class="quotelev1">&gt;     &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Jan 13, 2016, at 19:57 , Jim Edwards &lt;jedwards_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:jedwards_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         George and all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Back to OpenMPI, now the question is :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &#147;Is OpenMPI going to be updated (and when) in order to
</span><br>
<span class="quotelev2">&gt;&gt;         support an intuitive and user friendly feature, that is
</span><br>
<span class="quotelev2">&gt;&gt;         currently explicitly prohibited by the MPI 3.1 standard, but
</span><br>
<span class="quotelev2">&gt;&gt;         that might be part of the MPI-4 standard and that we already
</span><br>
<span class="quotelev2">&gt;&gt;         know is not backward compatible (*) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         If the MPI Forum agrees to amend the standard to allow this
</span><br>
<span class="quotelev1">&gt;         [currently forbidden] behavior, we will be bound to adapt.
</span><br>
<span class="quotelev1">&gt;         Meanwhile, I would assume that with regard to this particular
</span><br>
<span class="quotelev1">&gt;         question the MPICH implementation is far too user-friendly and
</span><br>
<span class="quotelev1">&gt;         only loosely standard compliant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The MPI standard does not require implementations to catch ANY
</span><br>
<span class="quotelev1">&gt;     invalid usage errors, so MPICH compliance is in no way affected by
</span><br>
<span class="quotelev1">&gt;     allowing invalid usage.  The error in question is completely
</span><br>
<span class="quotelev1">&gt;     innocuous and there is no value whatsoever to crashing a user
</span><br>
<span class="quotelev1">&gt;     application over it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That certainly a way of seeing it. In which case set your 
</span><br>
<span class="quotelev1">&gt; mpi_param_check to zero and let's close this discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If you want to hop on the standard-compliance soapbox, let's start
</span><br>
<span class="quotelev1">&gt;     with MPI-2 features like MPI_THREAD_MULTIPLE and RMA ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         (*) fwiw, mpich already &#147;implements&quot; this, so backward
</span><br>
<span class="quotelev2">&gt;&gt;         incompatibility would only affect tools currently working
</span><br>
<span class="quotelev2">&gt;&gt;         with OpenMPI but not with mpich.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         i am a pragmatic guy, so i'd rather go for it, but here is
</span><br>
<span class="quotelev2">&gt;&gt;         what i am gonna do :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         unless George vetoes that, i will add this topic to the
</span><br>
<span class="quotelev2">&gt;&gt;         weekly call agenda, and wait for the community to make a decision
</span><br>
<span class="quotelev2">&gt;&gt;         (e.g. go / no go, and milestone if needed 1.10 series ? 2.0 ?
</span><br>
<span class="quotelev2">&gt;&gt;         2.1 ? master only ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         A pragmatic user will certainly appreciate in all
</span><br>
<span class="quotelev1">&gt;         circumstances to type less characters (MPI_BYTE) instead of
</span><br>
<span class="quotelev1">&gt;         MPI_DATATYPE_NULL when used in combination with a statically
</span><br>
<span class="quotelev1">&gt;         known count of 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     What is the type of NULL and nullptr?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Both because of static analysis and inferring MPI datatypes from
</span><br>
<span class="quotelev1">&gt;     pointer types (as done in C++ codes), I'm not sure it's a good
</span><br>
<span class="quotelev1">&gt;     idea to say that null buffers have a well-defined MPI type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I fail to see the missing link between null pointers and MPI datatype, 
</span><br>
<span class="quotelev1">&gt; especially in the case you promote where you call an MPI function with 
</span><br>
<span class="quotelev1">&gt; a count of zero. Moreover, as mentioned by Bill on the MPI Forum 
</span><br>
<span class="quotelev1">&gt; mailing list, NULL is a valid buffer for MPI functions, even when the 
</span><br>
<span class="quotelev1">&gt; count is not ZERO when paired with the right datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point in that this is a matter for the MPI Forum, all discussion 
</span><br>
<span class="quotelev1">&gt; outside that context are bound to be lost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;           George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/01/28277.php">http://www.open-mpi.org/community/lists/users/2016/01/28277.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Jeff Hammond
</span><br>
<span class="quotelev1">&gt;     jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/01/28278.php">http://www.open-mpi.org/community/lists/users/2016/01/28278.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28280.php">http://www.open-mpi.org/community/lists/users/2016/01/28280.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28281/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28259.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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

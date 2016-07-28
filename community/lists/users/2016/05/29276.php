<?
$subject_val = "Re: [OMPI users] MPI_Put/Get with many nested derived type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 03:20:13 2016" -->
<!-- isoreceived="20160523072013" -->
<!-- sent="Mon, 23 May 2016 16:20:10 +0900" -->
<!-- isosent="20160523072010" -->
<!-- name="Akihiro Tabuchi" -->
<!-- email="tabuchi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Put/Get with many nested derived type" -->
<!-- id="5742AF2A.1020604_at_hpcs.cs.tsukuba.ac.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkV9Mft3ncQ8NgfHC=oF9hCVksYNebVP60K1xwiXXPc98w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Put/Get with many nested derived type<br>
<strong>From:</strong> Akihiro Tabuchi (<em>tabuchi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 03:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29277.php">Siegmar Gross: "[OMPI users] another problem with slot-list and openmpi-v2.x-dev-1441-g402abf9"</a>
<li><strong>Previous message:</strong> <a href="29275.php">Ralph Castain: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>In reply to:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Thanks for your response.
<br>
I confirmed that your commit fixed the issue.
<br>
<p>Regards,
<br>
Akihiro
<br>
<p>On 2016/05/22 5:05, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 16d9f71d01cc should provide a fix for this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, May 21, 2016 at 12:08 PM, Akihiro Tabuchi &lt;tabuchi_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:tabuchi_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks for your quick response and patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     After applying the patch to 1.10.2, the test code and our program which uses nested hvector type
</span><br>
<span class="quotelev1">&gt;     ran without error.
</span><br>
<span class="quotelev1">&gt;     I hope the patch will be applied to future releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Akihiro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 2016/05/21 23:15, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Here are attached two patches (one for master, one for v1.10)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         please consider these as experimental ones :
</span><br>
<span class="quotelev1">&gt;         - they cannot hurt
</span><br>
<span class="quotelev1">&gt;         - they might not always work
</span><br>
<span class="quotelev1">&gt;         - they will likely allocate a bit more memory than necessary
</span><br>
<span class="quotelev1">&gt;         - if something goes wrong, it will hopefully be caught soon enough in
</span><br>
<span class="quotelev1">&gt;         a new assert clause
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Sat, May 21, 2016 at 9:19 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;         &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Tabuchi-san,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             thanks for the report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             this is indeed a bug i was able to reproduce on my linux laptop (for
</span><br>
<span class="quotelev1">&gt;             some unknown reasons, there is no crash on OS X )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ompi_datatype_pack_description_length malloc 88 bytes for the datatype
</span><br>
<span class="quotelev1">&gt;             description, but 96 bytes are required.
</span><br>
<span class="quotelev1">&gt;             this causes a memory corruption with undefined side effects (crash in
</span><br>
<span class="quotelev1">&gt;             MPI_Type_free, or in MPI_Win_unlock)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             iirc, we made some changes to ensure  data is always aligned (Sparc
</span><br>
<span class="quotelev1">&gt;             processors require this), and we could have missed
</span><br>
<span class="quotelev1">&gt;             some stuff, and hence malloc less bytes than required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Sat, May 21, 2016 at 5:50 PM, Akihiro Tabuchi
</span><br>
<span class="quotelev1">&gt;             &lt;tabuchi_at_[hidden] &lt;mailto:tabuchi_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 At OpenMPI 1.10.2, MPI_Type_free crashes with a many nested derived type after using
</span><br>
<span class="quotelev1">&gt;                 MPI_Put/Get
</span><br>
<span class="quotelev1">&gt;                 with the datatype as target_datatype.
</span><br>
<span class="quotelev1">&gt;                 The test code is attached.
</span><br>
<span class="quotelev1">&gt;                 In the code, MPI_Type_free crashes if N_NEST &gt;= 4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 This problem occurs at OpenMPI 1.8.5 or later.
</span><br>
<span class="quotelev1">&gt;                 There is no problem at OpenMPI 1.8.4, MPICH 3.2, and MVAPICH 2.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Does anyone know about the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Regards,
</span><br>
<span class="quotelev1">&gt;                 Akihiro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 --
</span><br>
<span class="quotelev1">&gt;                 Akihiro Tabuchi
</span><br>
<span class="quotelev1">&gt;                 HPCS Lab, Univ. of Tsukuba
</span><br>
<span class="quotelev1">&gt;                 tabuchi_at_[hidden] &lt;mailto:tabuchi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                 Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                 Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29260.php">http://www.open-mpi.org/community/lists/users/2016/05/29260.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                 Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                 Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29262.php">http://www.open-mpi.org/community/lists/users/2016/05/29262.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Akihiro Tabuchi
</span><br>
<span class="quotelev1">&gt;     HPCS Lab, Univ. of Tsukuba
</span><br>
<span class="quotelev1">&gt;     tabuchi_at_[hidden] &lt;mailto:tabuchi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29263.php">http://www.open-mpi.org/community/lists/users/2016/05/29263.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29266.php">http://www.open-mpi.org/community/lists/users/2016/05/29266.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Akihiro Tabuchi
HPCS Lab, Univ. of Tsukuba
tabuchi_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29277.php">Siegmar Gross: "[OMPI users] another problem with slot-list and openmpi-v2.x-dev-1441-g402abf9"</a>
<li><strong>Previous message:</strong> <a href="29275.php">Ralph Castain: "Re: [OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>In reply to:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
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

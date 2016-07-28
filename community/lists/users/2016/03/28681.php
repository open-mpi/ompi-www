<?
$subject_val = "Re: [OMPI users] Error with MPI_Register_datarep";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 23:14:31 2016" -->
<!-- isoreceived="20160311041431" -->
<!-- sent="Fri, 11 Mar 2016 13:14:33 +0900" -->
<!-- isosent="20160311041433" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with MPI_Register_datarep" -->
<!-- id="56E24629.1020203_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56E23765.5090508_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with MPI_Register_datarep<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 23:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28682.php">Howard Pritchard: "Re: [OMPI users] Java MPI Code for NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="28680.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28680.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28693.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28693.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>my short answer is no.
<br>
<p>long answer is :
<br>
<p>- from MPI_Register_datarep()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* The io framework is only initialized lazily.  If it hasn't
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;already been initialized, do so now (note that MPI_FILE_OPEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and MPI_FILE_DELETE are the only two places that it will be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;initialized). */
<br>
<p>- from mca_io_base_register_datarep()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Find the maximum additional number of bytes required by all io
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;components for requests and make that the request size */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_LIST_FOREACH(cli, 
<br>
&amp;ompi_io_base_framework.framework_components, 
<br>
mca_base_component_list_item_t) {
<br>
...
<br>
}
<br>
<p>in your case, since nor MPI_File_open nor MPI_File_delete is invoked, 
<br>
the ompio component could be disabled.
<br>
but that would mean the io component selection is also based on the fact 
<br>
that MPI_Register_datarep() has
<br>
been invoked or not before. i can foresee users complaining about IO 
<br>
performance discrepancies just because
<br>
of one line (e.g. MPI_Register_datarep invokation) in their code.
<br>
<p>now if MPI_File_open is invoked first, that means that 
<br>
MPI_Register_datarep will fail or success based on the selected io 
<br>
component (and iirc, that could be file(system) dependent within the 
<br>
same application).
<br>
<p>i am open to suggestions, but so far, i do not see a better one (other 
<br>
than implementing this in OMPIO)
<br>
the patch for v1.10 can be downloaded at 
<br>
<a href="https://github.com/ggouaillardet/ompi-release/commit/1589278200d9fb363d61fa20fb39a4c2fa78c942.patch">https://github.com/ggouaillardet/ompi-release/commit/1589278200d9fb363d61fa20fb39a4c2fa78c942.patch</a>
<br>
application will not crash, but fail &quot;nicely&quot; on MPI_Register_datarep
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/11/2016 12:11 PM, &#201;ric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Thanks Gilles!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it works... I will continue my tests with that command line...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Until OMPIO supports this, is there a way to put a call into the code 
</span><br>
<span class="quotelev1">&gt; to disable ompio the same way --mca io ^ompio does?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 16-03-10 20:13, Gilles Gouaillardet a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Eric,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will fix the crash (fwiw, it is already fixed in v2.x and master)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; note this program cannot currently run &quot;as is&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; by default, there are two frameworks for io : ROMIO and OMPIO.
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Register_datarep does try to register the datarep into all 
</span><br>
<span class="quotelev2">&gt;&gt; frameworks,
</span><br>
<span class="quotelev2">&gt;&gt; and successes only if datarep was successfully registered into all 
</span><br>
<span class="quotelev2">&gt;&gt; frameworks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPIO does not currently support this
</span><br>
<span class="quotelev2">&gt;&gt; (and the stub is missing in v1.10 so the app does not crash)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; your test is successful if you blacklist ompio :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca io ^ompio ./int64
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_io=^romio ./int64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and you do not even need a patch for that :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/11/2016 4:47 AM, &#201;ric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a segfault while trying to use MPI_Register_datarep with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.10.2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpic++ -g -o int64 int64.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./int64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [melkor:24426] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [melkor:24426] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [melkor:24426] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [melkor:24426] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [melkor:24426] [ 0] /lib64/libpthread.so.0(+0xf1f0)[0x7f66cfb731f0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [melkor:24426] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have attached the beginning of a test program that use this function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and btw a totally different error occur with mpich: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://lists.mpich.org/pipermail/discuss/2016-March/004586.html">http://lists.mpich.org/pipermail/discuss/2016-March/004586.html</a>)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone help me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28677.php">http://www.open-mpi.org/community/lists/users/2016/03/28677.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28680.php">http://www.open-mpi.org/community/lists/users/2016/03/28680.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28682.php">Howard Pritchard: "Re: [OMPI users] Java MPI Code for NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="28680.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28680.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28693.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28693.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
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

<?
$subject_val = "Re: [OMPI users] Error with MPI_Register_datarep";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 12 22:26:35 2016" -->
<!-- isoreceived="20160313032635" -->
<!-- sent="Sat, 12 Mar 2016 22:26:31 -0500" -->
<!-- isosent="20160313032631" -->
<!-- name="&#195;&#137;ric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with MPI_Register_datarep" -->
<!-- id="56E4DDE7.1000700_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56E24629.1020203_at_rist.or.jp" -->
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
<strong>From:</strong> &#195;&#137;ric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-12 22:26:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28692.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>In reply to:</strong> <a href="28681.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p><p>Le 16-03-10 23:14, Gilles Gouaillardet a &#233;crit :
<br>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my short answer is no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; long answer is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - from MPI_Register_datarep()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* The io framework is only initialized lazily.  If it hasn't
</span><br>
<span class="quotelev1">&gt;        already been initialized, do so now (note that MPI_FILE_OPEN
</span><br>
<span class="quotelev1">&gt;        and MPI_FILE_DELETE are the only two places that it will be
</span><br>
<span class="quotelev1">&gt;        initialized). */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - from mca_io_base_register_datarep()
</span><br>
<span class="quotelev1">&gt;     /* Find the maximum additional number of bytes required by all io
</span><br>
<span class="quotelev1">&gt;        components for requests and make that the request size */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OPAL_LIST_FOREACH(cli, 
</span><br>
<span class="quotelev1">&gt; &amp;ompi_io_base_framework.framework_components, 
</span><br>
<span class="quotelev1">&gt; mca_base_component_list_item_t) {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in your case, since nor MPI_File_open nor MPI_File_delete is invoked, 
</span><br>
<span class="quotelev1">&gt; the ompio component could be disabled.
</span><br>
<span class="quotelev1">&gt; but that would mean the io component selection is also based on the 
</span><br>
<span class="quotelev1">&gt; fact that MPI_Register_datarep() has
</span><br>
<span class="quotelev1">&gt; been invoked or not before. i can foresee users complaining about IO 
</span><br>
<span class="quotelev1">&gt; performance discrepancies just because
</span><br>
<span class="quotelev1">&gt; of one line (e.g. MPI_Register_datarep invokation) in their code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ok, my situation is that I want a datarep only to have a compatible 
<br>
32bits code (long int) working with files written from 64bits code with 
<br>
&quot;native&quot; datarep...
<br>
<p>So I want to activate the datarep functionality only into 32 bits 
<br>
compilation of the code...
<br>
<p>Now, I continued my tests with &quot;--mca io ^ompio&quot;, but I hit another 
<br>
wall:  when I try to use the datarep just to test it, I now have this 
<br>
message:
<br>
<p>ERROR Returned by MPI: 51
<br>
ERROR_string Returned by MPI: MPI_ERR_UNSUPPORTED_DATAREP: data 
<br>
representation not supported
<br>
<p>which is pretty similar to MPICH output...
<br>
<p>So I am completely stuck into implementing a solution to read/write 
<br>
&quot;native&quot; 64 bits datarep files from a 32 bits architecture...
<br>
<p>Isn't that into the MPI-2 standard?  Does it means that no MPI 
<br>
implementation is standard compliant?  &gt;:)
<br>
<p><span class="quotelev1">&gt; now if MPI_File_open is invoked first, that means that 
</span><br>
<span class="quotelev1">&gt; MPI_Register_datarep will fail or success based on the selected io 
</span><br>
<span class="quotelev1">&gt; component (and iirc, that could be file(system) dependent within the 
</span><br>
<span class="quotelev1">&gt; same application).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am open to suggestions, but so far, i do not see a better one (other 
</span><br>
<span class="quotelev1">&gt; than implementing this in OMPIO)
</span><br>
<span class="quotelev1">&gt; the patch for v1.10 can be downloaded at 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/ggouaillardet/ompi-release/commit/1589278200d9fb363d61fa20fb39a4c2fa78c942.patch">https://github.com/ggouaillardet/ompi-release/commit/1589278200d9fb363d61fa20fb39a4c2fa78c942.patch</a>
</span><br>
<span class="quotelev1">&gt; application will not crash, but fail &quot;nicely&quot; on MPI_Register_datarep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In reality I want a solution to read/write files with the same API (MPI 
<br>
collective calls)... and produce files that are compatible between 
<br>
32bits vs 64 bits architecture relative to long int issue and without 
<br>
any lost of precision or performance for &quot;native&quot; 64bits architectures...
<br>
<p>I saw about 4 years ago the example into the &quot;Using MPI-2&quot; book about 
<br>
datarep, and that let me though I could easily implement a solution to 
<br>
read/write files in a compatible format between architectures, even if I 
<br>
choose &quot;native&quot; datarep under a 64 bits architecture that is the only 
<br>
one really used into clusters and by our users until now...  I made the 
<br>
decision to code once, with all collective I/O calls, knowing I would be 
<br>
able to convert int32 to int64 when needed only...
<br>
<p>Now, I feel I made a bad choice, since no MPI implementation have this 
<br>
working... or maybe there is a simple workaround?  Is there an 
<br>
&quot;external64&quot; available?  Is there something written into the file about 
<br>
the datarep?  If not, then &quot;native&quot; could still be as performant as 
<br>
&quot;external64&quot; since no conversion shall be done, but under 32bits 
<br>
architectures, there shall be some io performance losts, since more 
<br>
conversions will occur....
<br>
<p>Thanks for helping me understand!
<br>
<p>Eric
<br>
<p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/11/2016 12:11 PM, &#201;ric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Gilles!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it works... I will continue my tests with that command line...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Until OMPIO supports this, is there a way to put a call into the code 
</span><br>
<span class="quotelev2">&gt;&gt; to disable ompio the same way --mca io ^ompio does?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 16-03-10 20:13, Gilles Gouaillardet a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will fix the crash (fwiw, it is already fixed in v2.x and master)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; note this program cannot currently run &quot;as is&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by default, there are two frameworks for io : ROMIO and OMPIO.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Register_datarep does try to register the datarep into all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frameworks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and successes only if datarep was successfully registered into all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frameworks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPIO does not currently support this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and the stub is missing in v1.10 so the app does not crash)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your test is successful if you blacklist ompio :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca io ^ompio ./int64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_io=^romio ./int64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and you do not even need a patch for that :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/11/2016 4:47 AM, &#201;ric Chamberland wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a segfault while trying to use MPI_Register_datarep with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.10.2:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpic++ -g -o int64 int64.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./int64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [melkor:24426] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [melkor:24426] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [melkor:24426] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [melkor:24426] Failing at address: (nil)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [melkor:24426] [ 0] /lib64/libpthread.so.0(+0xf1f0)[0x7f66cfb731f0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [melkor:24426] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have attached the beginning of a test program that use this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (and btw a totally different error occur with mpich: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://lists.mpich.org/pipermail/discuss/2016-March/004586.html">http://lists.mpich.org/pipermail/discuss/2016-March/004586.html</a>)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can someone help me?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28677.php">http://www.open-mpi.org/community/lists/users/2016/03/28677.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28680.php">http://www.open-mpi.org/community/lists/users/2016/03/28680.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28693/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28692.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>In reply to:</strong> <a href="28681.php">Gilles Gouaillardet: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
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

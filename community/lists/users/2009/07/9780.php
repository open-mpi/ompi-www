<?
$subject_val = "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 08:56:56 2009" -->
<!-- isoreceived="20090701125656" -->
<!-- sent="Wed, 1 Jul 2009 08:56:50 -0400" -->
<!-- isosent="20090701125650" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp" -->
<!-- id="DDC91A3F-AED7-4244-8FA4-A00D4A3454FD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="34654C41-6408-4E47-A2F1-9A65E0750DF4_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 08:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9781.php">Michael Di Domenico: "[OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9779.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
<li><strong>In reply to:</strong> <a href="9779.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 1, 2009, at 8:01 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Random thought: would it be easy for the output of cat /dev/knem to
</span><br>
<span class="quotelev1">&gt; indicate whether IOAT hardware is present?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well *that* was replying to the wrong message.  :-)
<br>
<p>A real reply is below...
<br>
<p><span class="quotelev2">&gt; &gt; I have problems running large jobs on a PC cluster with OpenMPI  
</span><br>
<span class="quotelev1">&gt; V1.3.
</span><br>
<span class="quotelev2">&gt; &gt; Typically the error appears only for processor count &gt;= 2048  
</span><br>
<span class="quotelev1">&gt; (actually
</span><br>
<span class="quotelev2">&gt; &gt; cores), sometimes also bellow.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The nodes (Intel Nehalem, 2 procs, 4 cores each) run (scientific?)
</span><br>
<span class="quotelev2">&gt; &gt; linux.
</span><br>
<span class="quotelev2">&gt; &gt; $&gt; uname -a
</span><br>
<span class="quotelev2">&gt; &gt; Linux cl3fr1 2.6.18-128.1.10.el5 #1 SMP Thu May 7 12:48:13 EDT 2009
</span><br>
<span class="quotelev2">&gt; &gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code starts normally, reads it's input data sets (~4GB), does  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev2">&gt; &gt; initialization and then continues the actual calculations. So time
</span><br>
<span class="quotelev2">&gt; &gt; after that, it fails with the following error message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_connect_oob.c:459:qp_create_one]
</span><br>
<span class="quotelev2">&gt; &gt; error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What kind of communication pattern does the application use?  Does it  
<br>
use all-to-all?  Open MPI makes OpenFabrics verbs (i.e., IB in your  
<br>
case) connections lazily, so you might not see these problems until  
<br>
OMPI is trying to make connections -- well past MPI_INIT -- and then  
<br>
failing when it runs out of HCA QP resources.
<br>
<p><span class="quotelev2">&gt; &gt; Memory usage by the application should not be the problem. At this
</span><br>
<span class="quotelev2">&gt; &gt; proc
</span><br>
<span class="quotelev2">&gt; &gt; count, the code uses only ~100MB per proc. Also, the code runs for
</span><br>
<span class="quotelev2">&gt; &gt; lower
</span><br>
<span class="quotelev2">&gt; &gt; number of procs where it consumes more mem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also get the apparently secondary error messages:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [n100501:14587] [[40339,0],0]-[[40339,1],4] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev2">&gt; &gt; readv
</span><br>
<span class="quotelev2">&gt; &gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This error is likely caused by the first error -- processes fail and  
<br>
then TCP connections get reset, causing the readv() errors.  Perhaps  
<br>
we should have a better error message for this...
<br>
<p><span class="quotelev2">&gt; &gt; The cluster uses InfiniBand connections. I am aware only of the
</span><br>
<span class="quotelev2">&gt; &gt; following parameter changes (systemwide):
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_ib_min_rnr_timer = 25
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_ib_timeout = 20
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $&gt; ulimit -l
</span><br>
<span class="quotelev2">&gt; &gt; unlimited
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I attached:
</span><br>
<span class="quotelev2">&gt; &gt; 1) $&gt; ompi_info --all &gt; ompi_info.log
</span><br>
<span class="quotelev2">&gt; &gt; 2) stderr from the PBS: stderr.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Open MPI v1.3 is actually quite flexible in how it creates and uses  
<br>
OpenFabrics QPs.  By default, it likely creates 4 QPs (of varying  
<br>
buffer sizes) between each pair of MPI processes that connect to each  
<br>
other.  You can tune this down to be 3, 2, or even 1 QP to reduce the  
<br>
number of QPs that are being opened (and therefore, presumably, not  
<br>
exhaust HCA QP resources).
<br>
<p>Alternatively / additionally, you may wish to enable XRC if you have  
<br>
recent enough Mellanox HCAs.  This should also save on QP resources.
<br>
<p>You can set both of these things via the mca_btl_openib_receive_queues  
<br>
MCA parameter.  It takes a colon-delimited list of receive queues  
<br>
(which directly imply how many QP's to create).  There are 3 kinds of  
<br>
entries: per-peer QPs, shared receive queues, and XRC receive queues.   
<br>
Here's a description of each:
<br>
<p>Per-peer receive queues require between 2 and 5 parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Buffer size in bytes (mandatory)
<br>
&nbsp;&nbsp;&nbsp;2. Number of buffers (mandatory)
<br>
&nbsp;&nbsp;&nbsp;3. Low buffer count watermark (optional; defaults to (num_buffers /  
<br>
2))
<br>
&nbsp;&nbsp;&nbsp;4. Credit window size (optional; defaults to (low_watermark / 2))
<br>
&nbsp;&nbsp;&nbsp;5. Number of buffers reserved for credit messages (optional;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defaults to (num_buffers*2-1)/credit_window)
<br>
<p>&nbsp;&nbsp;&nbsp;Example: P,128,256,128,16
<br>
&nbsp;&nbsp;&nbsp;- 128 byte buffers
<br>
&nbsp;&nbsp;&nbsp;- 256 buffers to receive incoming MPI messages
<br>
&nbsp;&nbsp;&nbsp;- When the number of available buffers reaches 128, re-post 128 more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffers to reach a total of 256
<br>
&nbsp;&nbsp;&nbsp;- If the number of available credits reaches 16, send an explicit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;credit message to the sender
<br>
&nbsp;&nbsp;&nbsp;- Defaulting to ((256 * 2) - 1) / 16 = 31; this many buffers are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reserved for explicit credit messages
<br>
<p>Shared receive queues can take between 2 and 4 parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Buffer size in bytes (mandatory)
<br>
&nbsp;&nbsp;&nbsp;2. Number of buffers (mandatory)
<br>
&nbsp;&nbsp;&nbsp;3. Low buffer count watermark (optional; defaults to (num_buffers /  
<br>
2))
<br>
&nbsp;&nbsp;&nbsp;4. Maximum number of outstanding sends a sender can have (optional;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defaults to (low_watermark / 4)
<br>
<p>&nbsp;&nbsp;&nbsp;Example: S,1024,256,128,32
<br>
&nbsp;&nbsp;&nbsp;- 1024 byte buffers
<br>
&nbsp;&nbsp;&nbsp;- 256 buffers to receive incoming MPI messages
<br>
&nbsp;&nbsp;&nbsp;- When the number of available buffers reaches 128, re-post 128 more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffers to reach a total of 256
<br>
&nbsp;&nbsp;&nbsp;- A sender will not send to a peer unless it has less than 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outstanding sends to that peer.
<br>
<p>I believe that XRC receive queues are exactly the same as SRQs but  
<br>
with &quot;X&quot; instead of &quot;S&quot;.  If you use XRC, you can *only* specify XRC  
<br>
receive queues -- you cannot also specify PP or SRQ receive queues.   
<br>
Mellanox may fix that someday, but this restriction currently holds  
<br>
for the 1.3 OMPI series.
<br>
<p>The default value of btl_openib_receive_queues is likely to be set by  
<br>
the $prefix/share/openmpi/mca-btl-openib-device-params.ini file.  Look  
<br>
in that file for your specific HCA device and see the &quot;receive_queues&quot;  
<br>
value set for it.  You can override this value on the mpirun command  
<br>
line or by editing this file (make sure to edit this file on every  
<br>
node!).  If your device does not have a receive_queues value in that  
<br>
file, you can look up the default value with ompi_info:
<br>
<p>$ ompi_info --param btl openib --parsable | grep receive_queues
<br>
mca:btl:openib:param:btl_openib_receive_queues:value: P, 
<br>
128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32
<br>
mca:btl:openib:param:btl_openib_receive_queues:data_source: default  
<br>
value
<br>
mca:btl:openib:param:btl_openib_receive_queues:status: writable
<br>
mca:btl:openib:param:btl_openib_receive_queues:help: Colon-delimited,  
<br>
comma delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4
<br>
mca:btl:openib:param:btl_openib_receive_queues:deprecated: no
<br>
<p>You can see that in my setup, receive_queues defaults to 4 QPs: 1 PP  
<br>
for small messages (256 buffers of size 128) and then 3 SRQs of  
<br>
increasing buffer size.
<br>
<p>More specifically, if you know the exact message sizes in your  
<br>
application, you can tune the receive_queues value to exactly fit your  
<br>
messages and get a very high degree of registered memory utilization.   
<br>
In the default case above, Open MPI posts a truckload of short message  
<br>
buffers and progressively smaller number of larger message buffers.   
<br>
This allows for lots and lots of short message resources (e.g., high  
<br>
message injection/reception rates) while balancing a few longer  
<br>
message resources.
<br>
<p>Keep in mind that Open MPI only uses these receive_queues value for  
<br>
short/medium messages -- longer messages are passed via RDMA and  
<br>
bypass the buffer sizes specified in receive_queues.  See <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.2">http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.2</a> 
<br>
&nbsp;&nbsp;and <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3">http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3</a> 
<br>
.
<br>
<p>Hope this helps!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9781.php">Michael Di Domenico: "[OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9779.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
<li><strong>In reply to:</strong> <a href="9779.php">Jeff Squyres: "Re: [OMPI users] btl_openib_connect_oob.c:459:qp_create_one: errorcreating qp"</a>
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

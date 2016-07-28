<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 18:53:30 2011" -->
<!-- isoreceived="20110523225330" -->
<!-- sent="Mon, 23 May 2011 15:53:25 -0700" -->
<!-- isosent="20110523225325" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="D88FC67F-F9E6-46ED-8BD3-E29955FB789F_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB6264CC-7C21-486E-9FF9-C0C6E8159B17_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4rc2 is up<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-23 18:53:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9288.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9286.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9288.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I get the following warnings from &quot;make&quot; using the Intel 2011.3.174  
<br>
compilers on OpenMPI 1.4.3:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; btl_openib_endpoint.c(319): warning #188: enumerated type mixed with  
</span><br>
<span class="quotelev1">&gt; another type
</span><br>
<span class="quotelev1">&gt; btl_openib_async.c(411): warning #188: enumerated type mixed with  
</span><br>
<span class="quotelev1">&gt; another type
</span><br>
<span class="quotelev1">&gt; btl_openib_async.c(454): warning #188: enumerated type mixed with  
</span><br>
<span class="quotelev1">&gt; another type
</span><br>
<span class="quotelev1">&gt; btl_openib_async.c(472): warning #188: enumerated type mixed with  
</span><br>
<span class="quotelev1">&gt; another type
</span><br>
<span class="quotelev1">&gt; btl_openib_async.c(510): warning #188: enumerated type mixed with  
</span><br>
<span class="quotelev1">&gt; another type
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_oob.c(289): warning #188: enumerated type  
</span><br>
<span class="quotelev1">&gt; mixed with another type
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_xoob.c(462): warning #188: enumerated  
</span><br>
<span class="quotelev1">&gt; type mixed with another type
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_xoob.c(563): warning #188: enumerated  
</span><br>
<span class="quotelev1">&gt; type mixed with another type
</span><br>
<p><p>These are all warnings caused by mixing enums and ints as though they  
<br>
were interchangeable.  This concerns me, because, one can mistakenly  
<br>
assume the only possible values of an enum data type are the range of  
<br>
valid enum constants.  That can make debugging such errors very  
<br>
difficult.  I do not know if you are aware of these.
<br>
<p>I found the following:
<br>
<p>1) ompi/mca/btl/openib/btl_openib/btl_openib_endpoint.c(319): warning  
<br>
#188: enumerated type mixed with another type:
<br>
<p><span class="quotelev1">&gt;     ep-&gt;rem_info.rem_transport_type = (remote_proc_info- 
</span><br>
<span class="quotelev2">&gt; &gt;pm_port_info).transport_type;
</span><br>
<p><p>The left side is an enum mca_btl_openib_transport_type_t (from ompi/ 
<br>
mca/btl/openib/btl_openib.h):
<br>
<p><span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Infiniband (IB) BTL component.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef enum {
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_OPENIB_TRANSPORT_IB,
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_OPENIB_TRANSPORT_IWARP,
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_OPENIB_TRANSPORT_RDMAOE,
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_OPENIB_TRANSPORT_UNKNOWN,
</span><br>
<span class="quotelev1">&gt;     MCA_BTL_OPENIB_TRANSPORT_SIZE
</span><br>
<span class="quotelev1">&gt; } mca_btl_openib_transport_type_t;
</span><br>
<p><p>, while the right side is a uint8_t (also from ompi/mca/btl/openib/ 
<br>
btl_openib.h):
<br>
<p><span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Common information for all ports that is sent in the modex message
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; typedef struct mca_btl_openib_modex_message_t {
</span><br>
<span class="quotelev1">&gt;     /** The subnet ID of this port */
</span><br>
<span class="quotelev1">&gt;     uint64_t subnet_id;
</span><br>
<span class="quotelev1">&gt;     /** LID of this port */
</span><br>
<span class="quotelev1">&gt;     uint16_t lid;
</span><br>
<span class="quotelev1">&gt;     /** APM LID for this port */
</span><br>
<span class="quotelev1">&gt;     uint16_t apm_lid;
</span><br>
<span class="quotelev1">&gt;     /** The MTU used by this port */
</span><br>
<span class="quotelev1">&gt;     uint8_t mtu;
</span><br>
<span class="quotelev1">&gt;     /** vendor id define device type and tuning */
</span><br>
<span class="quotelev1">&gt;     uint32_t vendor_id;
</span><br>
<span class="quotelev1">&gt;     /** vendor part id define device type and tuning */
</span><br>
<span class="quotelev1">&gt;     uint32_t vendor_part_id;
</span><br>
<span class="quotelev1">&gt;     /** Transport type of remote port */
</span><br>
<span class="quotelev1">&gt;     uint8_t transport_type;
</span><br>
<span class="quotelev1">&gt;     /** Dummy field used to calculate the real length */
</span><br>
<span class="quotelev1">&gt;     uint8_t end;
</span><br>
<span class="quotelev1">&gt; } mca_btl_openib_modex_message_t;
</span><br>
<p>I would think mca_btl_openib_modex_message_t.transport_type should be  
<br>
a compatible enum as well.  At least there should be some code  
<br>
somewhere with asserts or validity checks in, say, a switch block when  
<br>
DEBUG=1, and a cast otherwise.
<br>
<p>2) ompi/mca/btl/openib/btl_openib/btl_openib_async.c(411): warning  
<br>
#188: enumerated type mixed with another type, and
<br>
ompi/mca/btl/openib/btl_openib_async.c(454): warning #188: enumerated  
<br>
type mixed with another type:
<br>
<p><span class="quotelev1">&gt; static ... ( ... enum ibv_qp_attr_mask *mask ... )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt;     *mask = IBV_QP_ALT_PATH|IBV_QP_PATH_MIG_STATE;
</span><br>
<p><p>ompi/mca/btl/openib/btl_openib_async.c(472): warning #188: enumerated  
<br>
type mixed with another type, and
<br>
ompi/mca/btl/openib/btl_openib_async.c(510): warning #188: enumerated  
<br>
type mixed with another type:
<br>
<p><span class="quotelev1">&gt;     enum ibv_qp_attr_mask mask = 0;
</span><br>
<p><p>These four warnings are all due to mixing the definition of bitfields  
<br>
using a C enum type (from /usr/include/infiniband/verbs.h):
<br>
<p><span class="quotelev1">&gt; enum ibv_qp_attr_mask {
</span><br>
<span class="quotelev1">&gt;         IBV_QP_STATE                    = 1 &lt;&lt;  0,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_CUR_STATE                = 1 &lt;&lt;  1,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_EN_SQD_ASYNC_NOTIFY      = 1 &lt;&lt;  2,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_ACCESS_FLAGS             = 1 &lt;&lt;  3,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_PKEY_INDEX               = 1 &lt;&lt;  4,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_PORT                     = 1 &lt;&lt;  5,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_QKEY                     = 1 &lt;&lt;  6,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_AV                       = 1 &lt;&lt;  7,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_PATH_MTU                 = 1 &lt;&lt;  8,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_TIMEOUT                  = 1 &lt;&lt;  9,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_RETRY_CNT                = 1 &lt;&lt; 10,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_RNR_RETRY                = 1 &lt;&lt; 11,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_RQ_PSN                   = 1 &lt;&lt; 12,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_MAX_QP_RD_ATOMIC         = 1 &lt;&lt; 13,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_ALT_PATH                 = 1 &lt;&lt; 14,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_MIN_RNR_TIMER            = 1 &lt;&lt; 15,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_SQ_PSN                   = 1 &lt;&lt; 16,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_MAX_DEST_RD_ATOMIC       = 1 &lt;&lt; 17,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_PATH_MIG_STATE           = 1 &lt;&lt; 18,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_CAP                      = 1 &lt;&lt; 19,
</span><br>
<span class="quotelev1">&gt;         IBV_QP_DEST_QPN                 = 1 &lt;&lt; 20
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<p><p>The warning is really an error, since neither the right hand side  
<br>
&quot;IBV_QP_ALT_PATH|IBV_QP_PATH_MIG_STATE&quot; nor &quot;0&quot; is one of the enum  
<br>
ibv_qp_attr_mask values, and is therefore not a valid member of that  
<br>
data type.  I'm not really sure there is a better way, since C does  
<br>
not guarantee the order of bitfields.  Anyway, since C permits enums  
<br>
to be used wherever ints can be used, the right hand side of
<br>
<p><span class="quotelev1">&gt;     *mask = IBV_QP_ALT_PATH|IBV_QP_PATH_MIG_STATE;
</span><br>
<p><p>is equivalent to
<br>
<p><span class="quotelev1">&gt;     *mask = (int) IBV_QP_ALT_PATH | (int) IBV_QP_PATH_MIG_STATE;
</span><br>
<p><p>, which results in an int.  (And, of course, = 0 is an int.)
<br>
<p>The simplest fix would be to cast the result into an enum  
<br>
ibv_qp_attr_mask, with comments added that enum ibv_qp_attr_mask *mask  
<br>
is really the union of all the bitfields in enum ibv_qp_attr_mask, and  
<br>
that the value of *mask may not be a valid enum ibv_qp_attr_mask.
<br>
<p>3) ompi/mca/btl/openib/btl_openib/connect/ 
<br>
btl_openib_connect_oob.c(289): warning #188: enumerated type mixed  
<br>
with another type,
<br>
<p><span class="quotelev1">&gt;         enum ibv_mtu mtu = (openib_btl-&gt;device-&gt;mtu &lt; endpoint- 
</span><br>
<span class="quotelev2">&gt; &gt;rem_info.rem_mtu) ?
</span><br>
<span class="quotelev1">&gt;             openib_btl-&gt;device-&gt;mtu : endpoint-&gt;rem_info.rem_mtu;
</span><br>
<p><p>ompi/mca/btl/openib/btl_openib/connect/btl_openib_connect_xoob.c(462):  
<br>
warning #188: enumerated type mixed with another type, and
<br>
<p><span class="quotelev1">&gt;     attr.path_mtu = (openib_btl-&gt;device-&gt;mtu &lt; endpoint- 
</span><br>
<span class="quotelev2">&gt; &gt;rem_info.rem_mtu) ?
</span><br>
<span class="quotelev1">&gt;         openib_btl-&gt;device-&gt;mtu : rem_info-&gt;rem_mtu;
</span><br>
<p><p>ompi/mca/btl/openib/btl_openib/connect/btl_openib_connect_xoob.c(563):  
<br>
warning #188: enumerated type mixed with another type:
<br>
<p><span class="quotelev1">&gt;     attr.path_mtu = (openib_btl-&gt;device-&gt;mtu &lt; endpoint- 
</span><br>
<span class="quotelev2">&gt; &gt;rem_info.rem_mtu) ?
</span><br>
<span class="quotelev1">&gt;         openib_btl-&gt;device-&gt;mtu : rem_info-&gt;rem_mtu;
</span><br>
<p><p>The left hand sides are encoded MTUs (enum ibv_mtu, from /usr/include/ 
<br>
infiniband/verbs.h):
<br>
<p><p><span class="quotelev1">&gt; enum ibv_mtu {
</span><br>
<span class="quotelev1">&gt;         IBV_MTU_256  = 1,
</span><br>
<span class="quotelev1">&gt;         IBV_MTU_512  = 2,
</span><br>
<span class="quotelev1">&gt;         IBV_MTU_1024 = 3,
</span><br>
<span class="quotelev1">&gt;         IBV_MTU_2048 = 4,
</span><br>
<span class="quotelev1">&gt;         IBV_MTU_4096 = 5
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<p><p>, while the openib_btl-&gt;device-&gt;mtu and rem_info-&gt;rem_mtu on the right  
<br>
hand sides are uint32_t's (encoded?).
<br>
<p>By the way, lines 563-564 in ompi/mca/btl/openib/btl_openib/connect/ 
<br>
btl_openib_connect_xoob.c look suspicious to me:
<br>
<p><span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c(563): warning #188: enumerated type mixed  
</span><br>
<span class="quotelev1">&gt; with another type:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     attr.path_mtu = (openib_btl-&gt;device-&gt;mtu &lt; endpoint- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;rem_info.rem_mtu) ?
</span><br>
<span class="quotelev2">&gt;&gt;         openib_btl-&gt;device-&gt;mtu : rem_info-&gt;rem_mtu;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>The test on the right hand side of the conditional is endpoint- 
<br>
<span class="quotelev1"> &gt;rem_info.rem_mtu, while the &quot;false&quot; expression is rem_info- 
</span><br>
<span class="quotelev1"> &gt;rem_mtu.  I suspect one of them is not correct.
</span><br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Fixed the ROMIO attribute problem properly this time -- it's in the  
</span><br>
<span class="quotelev1">&gt; usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9288.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9286.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9288.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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

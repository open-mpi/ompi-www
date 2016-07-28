<?
$subject_val = "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 20:40:08 2014" -->
<!-- isoreceived="20140806004008" -->
<!-- sent="Wed, 6 Aug 2014 09:40:06 +0900" -->
<!-- isosent="20140806004006" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins" -->
<!-- id="CAAkFZ5td8mmFk=gBFN6rON3c8hc8_2ytKcZ2ohRJrLpBc2Jkww_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F7ACDE06-2053-4556-B83A-3B3DEE67AED8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 20:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15528.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Previous message:</strong> <a href="15526.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15526.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15529.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15529.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hummm
<br>
<p>i intentionally did not swap the two 32 bits (!)
<br>
<p>from the top level, what we have is :
<br>
<p>typedef struct {
<br>
&nbsp;&nbsp;&nbsp;union {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint64_t opal;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t jobid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t vpid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} orte;
<br>
} meta_process_name_t;
<br>
<p>OPAL is agnostic about jobid and vpid.
<br>
jobid and vpid are set in ORTE/MPI and OPAL is used only
<br>
to transport the 64 bits
<br>
/* opal_process_name_t and orte_process_name_t are often casted into each
<br>
other */
<br>
at ORTE/MPI level, jobid and vpid are set individually
<br>
/* e.g. we do *not* do something like opal = jobid | (vpid&lt;&lt;32) */
<br>
this is why everything works fine on homogeneous clusters regardless
<br>
endianness.
<br>
<p>now in heterogeneous cluster, thing get a bit trickier ...
<br>
<p>i was initially unhappy with my commit and i think i found out why :
<br>
this is an abstraction violation !
<br>
the two 32 bits are not swapped by OPAL because this is what is expected by
<br>
the ORTE/OMPI.
<br>
<p>now i d like to suggest the following lightweight approach :
<br>
<p>at OPAL, use #if protected htonll/ntohll
<br>
(e.g. swap the two 32bits)
<br>
<p>do the trick at the ORTE level :
<br>
<p>simply replace
<br>
<p>struct orte_process_name_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_jobid_t jobid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_vpid_t vpid;
<br>
};
<br>
<p>with
<br>
<p>#if OPAL_ENABLE_HETEROGENEOUS_SUPPORT &amp;&amp; !defined(WORDS_BIGENDIAN)
<br>
struct orte_process_name_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_vpid_t vpid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_jobid_t jobid;
<br>
};
<br>
#else
<br>
struct orte_process_name_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_jobid_t jobid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_vpid_t vpid;
<br>
};
<br>
#endif
<br>
<p><p>so we keep OPAL agnostic about how the uint64_t is really used at the upper
<br>
level.
<br>
an other option is to make OPAL aware of jobid and vpid but this is a bit
<br>
more heavyweight imho.
<br>
<p>i'll try this today and make sure it works.
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wed, Aug 6, 2014 at 8:17 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ah yes, so it is - sorry I missed that last test :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 5, 2014, at 10:50 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code committed by Gilles is correctly protected for big endian (
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/32425">https://svn.open-mpi.org/trac/ompi/changeset/32425</a>). I was merely
</span><br>
<span class="quotelev1">&gt; pointing out that I think he should also swap the 2 32 bits in his
</span><br>
<span class="quotelev1">&gt; implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 5, 2014 at 1:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 5, 2014, at 10:23 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Aug 5, 2014 at 1:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...wouldn't that then require that you know (a) the other side is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; little endian, and (b) that you are on a big endian? Otherwise, you wind up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the same issue in reverse, yes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is similar to the 32 bits ntohl that we are using in other parts of
</span><br>
<span class="quotelev2">&gt;&gt; the project. Any  little endian participant will do the conversion, while
</span><br>
<span class="quotelev2">&gt;&gt; every big endian participant will use an empty macro instead.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the ORTE methods, we explicitly set the fields (e.g., jobid =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ntohl(remote-jobid)) to get around this problem. I missed that he did it by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location instead of named fields - perhaps we should do that instead?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As soon as we impose the ORTE naming scheme at the OPAL level (aka. the
</span><br>
<span class="quotelev2">&gt;&gt; notion of jobid and vpid) this approach will become possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not proposing that at all so long as the other method will work without
</span><br>
<span class="quotelev2">&gt;&gt; knowing the other side's endianness. Sounds like your approach should work
</span><br>
<span class="quotelev2">&gt;&gt; fine as long as Gilles adds a #if so big endian defines the macro away
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 5, 2014, at 10:06 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Technically speaking, converting a 64 bits to a big endian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; representation requires the swap of the 2 32 bits parts. So the correct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; approach would have been:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uint64_t htonll(uint64_t v)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return ((((uint64_t)ntohl(n)) &lt;&lt; 32 | (uint64_t)ntohl(n &gt;&gt; 32));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Aug 5, 2014 at 5:52 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW: that's exactly how we do it in ORTE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 4, 2014, at 10:25 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i confirm there was a problem when running on an heterogeneous cluster,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is now fixed in r32425.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i am not convinced i chose the most elegant way to achieve the desired
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; result ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could you please double check this commit ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2014/08/02 0:14, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The design of the BTL move was to let the opal_process_name_t be agnostic to what is stored inside, and all accesses should be done through the provided accessors. Thus, big endian or little endian doesn&#226;&#128;&#153;t make a difference, as long as everything goes through the accessors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#226;&#128;&#153;m skeptical about the support of heterogeneous environments in the current code, so I didn&#226;&#128;&#153;t pay much attention to handling the case in the TCP BTL. But in case we do care it is enough to make  the 2 macros point to something meaningful instead of being empty (bswap_64 or something).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 1, 2014, at 06:52 , Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George and Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i am very confused whether there is an issue or not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anyway, today Paul and i ran basic tests on big endian machines and did not face any issue related to big endianness.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so i made my homework, digged into the code, and basically, opal_process_name_t is used as an orte_process_name_t.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for example, in ompi_proc_init :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_CAST_ORTE_NAME(&amp;proc-&gt;super.proc_name)-&gt;jobid = OMPI_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_CAST_ORTE_NAME(&amp;proc-&gt;super.proc_name)-&gt;vpid = i;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OMPI_CAST_ORTE_NAME(a) ((orte_process_name_t*)(a))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so as long as an opal_process_name_t is used as an orte_process_name_t, there is no problem,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regardless the endianness of the homogenous cluster we are running on.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the sake of readability (and for being pedantic too ;-) ) in r32357,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp;proc_temp-&gt;super.proc_name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could be replaced with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_CAST_ORTE_NAME(&amp;proc_temp-&gt;super.proc_name)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That being said, in btl/tcp, i noticed :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in mca_btl_tcp_component_recv_handler :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     opal_process_name_t guid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* recv the process identifier */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     retval = recv(sd, (char *)&amp;guid, sizeof(guid), 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if(retval != sizeof(guid)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CLOSE_THE_SOCKET(sd);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         return;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     OPAL_PROCESS_NAME_NTOH(guid);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and in mca_btl_tcp_endpoint_send_connect_ack :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* send process identifier to remote endpoint */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     opal_process_name_t guid = btl_proc-&gt;proc_opal-&gt;proc_name;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     OPAL_PROCESS_NAME_HTON(guid);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if(mca_btl_tcp_endpoint_send_blocking(btl_endpoint, &amp;guid, sizeof(guid)) !=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OPAL_PROCESS_NAME_NTOH(guid)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OPAL_PROCESS_NAME_HTON(guid)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i had no time yet to test yet, but for now, i can only suspect :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - there will be an issue with the tcp btl on an heterogeneous cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - for this case, the fix is to have a different version of the OPAL_PROCESS_NAME_xTOy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   on little endian arch if heterogeneous mode is supported.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does that make sense ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2014/07/31 1:29, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The underlying structure changed, so a little bit of fiddling is normal.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Instead of using a field in the ompi_proc_t you are now using a field down
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in opal_proc_t, a field that simply cannot have the same type as before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (orte_process_name_t).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Jul 30, 2014 at 12:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George - my point was that we regularly tested using the method in that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; routine, and now we have to do something a little different. So it is an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;issue&quot; in that we have to make changes across the code base to ensure we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do things the &quot;new&quot; way, that's all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 30, 2014, at 9:17 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, this is not going to be an issue if the opal_identifier_t is used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correctly (aka only via the exposed accessors).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Jul 30, 2014 at 12:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yeah, my fix won't work for big endian machines - this is going to be an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issue across the code base now, so we'll have to troll and fix it. I was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doing the minimal change required to fix the trunk in the meantime.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 30, 2014, at 9:06 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes. opal_process_name_t has basically no meaning by itself, it is a 64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bits storage location used by the upper layer to save some local key that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can be later used to extract information. Calling the OPAL level compare
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function might be a better fit there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Jul 30, 2014 at 11:50 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was it really that simple ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc_temp-&gt;super.proc_name has type opal_process_name_t :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; typedef opal_identifier_t opal_process_name_t;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; typedef uint64_t opal_identifier_t;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *but*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; item_ptr-&gt;peer has type orte_process_name_t :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; struct orte_process_name_t {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    orte_jobid_t jobid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    orte_vpid_t vpid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; };
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bottom line, is r32357 still valid on a big endian arch ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Jul 30, 2014 at 11:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just fixed this one - all that was required was an ampersand as the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; name was being passed into the function instead of a pointer to the name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; r32357
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 30, 2014, at 7:43 AM, Gilles GOUAILLARDET &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; r32353 can be seen as a suspect...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Even if it is correct, it might have exposed the bug discussed in #4815
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even more (e.g. we hit the bug 100% after the fix)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does the attached patch to #4815 fixes the problem ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If yes, and if you see this issue as a showstopper, feel free to commit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it and drop a note to #4815
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ( I am afk until tomorrow)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just an FYI that my trunk version (r32355) does not work at all anymore
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if I do not include &quot;--mca coll ^ml&quot;.    Here is a stack trace from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ibm/pt2pt/send test running on a single node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007f6c0d1321d0 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007f6c183abd52 in orte_util_compare_name_fields (fields=15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '\017', name1=0x192350001, name2=0xbaf76c) at ../../orte/util/name_fns.c:522
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007f6c0bea17be in bcol_basesmuma_smcm_allgather_connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (sm_bcol_module=0x7f6bf3b68040, module=0xb3d200, peer_list=0x7f6c0c0a6748,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back_files=0x7f6bf3ffd6c8,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     comm=0x6037a0, input=..., base_fname=0x7f6c0bea2606
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;sm_payload_mem_&quot;, map_all=false) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/mca/bcol/basesmuma/bcol_basesmuma_smcm.c:237
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007f6c0be98307 in bcol_basesmuma_bank_init_opti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (payload_block=0xbc0f60, data_offset=64, bcol_module=0x7f6bf3b68040,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reg_data=0xba28c0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/mca/bcol/basesmuma/bcol_basesmuma_buf_mgmt.c:302
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007f6c0cced386 in mca_coll_ml_register_bcols
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ml_module=0xba5c40) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:510
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00007f6c0cced68f in ml_module_memory_initialization
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ml_module=0xba5c40) at ../../../../../ompi/mca/coll/ml/coll_ml_module.c:558
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x00007f6c0ccf06b1 in ml_discover_hierarchy (ml_module=0xba5c40) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/mca/coll/ml/coll_ml_module.c:1539
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x00007f6c0ccf4e0b in mca_coll_ml_comm_query (comm=0x6037a0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priority=0x7fffe7991b58) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/mca/coll/ml/coll_ml_module.c:2963
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x00007f6c18cc5b09 in query_2_0_0 (component=0x7f6c0cf50940,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm=0x6037a0, priority=0x7fffe7991b58, module=0x7fffe7991b90)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:372
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x00007f6c18cc5ac8 in query (component=0x7f6c0cf50940,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm=0x6037a0, priority=0x7fffe7991b58, module=0x7fffe7991b90)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:355
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #11 0x00007f6c18cc59d2 in check_one_component (comm=0x6037a0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component=0x7f6c0cf50940, module=0x7fffe7991b90)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:317
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #12 0x00007f6c18cc5818 in check_components (components=0x7f6c18f46ef0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm=0x6037a0) at ../../../../ompi/mca/coll/base/coll_base_comm_select.c:281
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #13 0x00007f6c18cbe3c9 in mca_coll_base_comm_select (comm=0x6037a0) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../ompi/mca/coll/base/coll_base_comm_select.c:117
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #14 0x00007f6c18c52301 in ompi_mpi_init (argc=1, argv=0x7fffe79924c8,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requested=0, provided=0x7fffe79922e8) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../ompi/runtime/ompi_mpi_init.c:918
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #15 0x00007f6c18c86e92 in PMPI_Init (argc=0x7fffe799234c,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argv=0x7fffe7992340) at pinit.c:84
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #16 0x0000000000401056 in main (argc=1, argv=0x7fffe79924c8) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; send.c:32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007f6c183abd52 in orte_util_compare_name_fields (fields=15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '\017', name1=0x192350001, name2=0xbaf76c) at ../../orte/util/name_fns.c:522
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 522           if (name1-&gt;jobid &lt; name2-&gt;jobid) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) print name1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $1 = (const orte_process_name_t *) 0x192350001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) print *name1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cannot access memory at address 0x192350001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) print name2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $2 = (const orte_process_name_t *) 0xbaf76c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) print *name2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $3 = {jobid = 2452946945, vpid = 1}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;devel-bounces_at_[hidden]&gt; &lt;devel-bounces_at_[hidden]&gt;] On Behalf Of Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gouaillardet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Wednesday, July 30, 2014 2:16 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] trunk compilation errors in jenkins
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4815 is indirectly related to the move :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in bcol/basesmuma, we used to compare ompi_process_name_t, and now
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we (try to) compare an ompi_process_name_t and an opal_process_name_t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (which causes a glory SIGSEGV)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i proposed a temporary patch which is both broken and unelegant, could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; please advise a correct solution ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2014/07/27 7:37, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you have any issue with the move, I&#226;&#128;&#153;ll be happy to help and/or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you on your last move toward a completely generic BTL. To facilitate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; work I exposed a minimalistic set of OMPI information at the OPAL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; level. Take
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a look at opal/util/proc.h for more info, but please try not to expose
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15348.php">http://www.open-mpi.org/community/lists/devel/2014/07/15348.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15348.php">http://www.open-mpi.org/community/lists/devel/2014/07/15348.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi.org/community/lists/devel/2014/07/15348.php
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15348.php">http://www.open-mpi.org/community/lists/devel/2014/07/15348.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15348.php">http://www.open-mpi.org/community/lists/devel/2014/07/15348.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  This email message is for the sole use of the intended recipient(s)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the original message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15355.php">http://www.open-mpi.org/community/lists/devel/2014/07/15355.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15356.php">http://www.open-mpi.org/community/lists/devel/2014/07/15356.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15363.php">http://www.open-mpi.org/community/lists/devel/2014/07/15363.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15364.php">http://www.open-mpi.org/community/lists/devel/2014/07/15364.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15365.php">http://www.open-mpi.org/community/lists/devel/2014/07/15365.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15366.php">http://www.open-mpi.org/community/lists/devel/2014/07/15366.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15367.php">http://www.open-mpi.org/community/lists/devel/2014/07/15367.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15368.php">http://www.open-mpi.org/community/lists/devel/2014/07/15368.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15446.php">http://www.open-mpi.org/community/lists/devel/2014/08/15446.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15454.php">http://www.open-mpi.org/community/lists/devel/2014/08/15454.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15509.php">http://www.open-mpi.org/community/lists/devel/2014/08/15509.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15514.php">http://www.open-mpi.org/community/lists/devel/2014/08/15514.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15518.php">http://www.open-mpi.org/community/lists/devel/2014/08/15518.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15519.php">http://www.open-mpi.org/community/lists/devel/2014/08/15519.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15520.php">http://www.open-mpi.org/community/lists/devel/2014/08/15520.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15521.php">http://www.open-mpi.org/community/lists/devel/2014/08/15521.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15523.php">http://www.open-mpi.org/community/lists/devel/2014/08/15523.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15526.php">http://www.open-mpi.org/community/lists/devel/2014/08/15526.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15528.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Previous message:</strong> <a href="15526.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15526.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15529.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15529.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
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

<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 10:16:01 2008" -->
<!-- isoreceived="20081007141601" -->
<!-- sent="Tue, 07 Oct 2008 16:15:55 +0200" -->
<!-- isosent="20081007141555" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions" -->
<!-- id="48EB6F1B.30400_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a2f40f560810070646r685706e4n605e3ac87623d6b4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 10:15:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4743.php">Matt Burgess: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4741.php">Matt Burgess: "[OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="4741.php">Matt Burgess: "[OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4743.php">Matt Burgess: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="4743.php">Matt Burgess: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt,
<br>
Can you please try attached patch ? I guess it will resolve this issue.
<br>
<p>Thanks,
<br>
Pasha
<br>
<p>Matt Burgess wrote:
<br>
<span class="quotelev1">&gt; Lenny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the info. It doesn't seem to be be working still. My 
</span><br>
<span class="quotelev1">&gt; command line is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -H d2-ib,d3-ib -mca btl 
</span><br>
<span class="quotelev1">&gt; openib,self -mca btl_openib_of_pkey_val 33033 
</span><br>
<span class="quotelev1">&gt; /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have a &quot;/sys/class/infiniband/mthca0/ports/1/pkeys/&quot; but I do 
</span><br>
<span class="quotelev1">&gt; have &quot;/sys/class/infiniband/mlx4_0/ports/1/pkeys/&quot;. It's contents are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0    106  114  122  16   24   32   40   49   57   65   73   81   9    98
</span><br>
<span class="quotelev1">&gt; 1    107  115  123  17   25   33   41   5    58   66   74   82   90   99
</span><br>
<span class="quotelev1">&gt; 10   108  116  124  18   26   34   42   50   59   67   75   83   91  
</span><br>
<span class="quotelev1">&gt; 100  109  117  125  19   27   35   43   51   6    68   76   84   92  
</span><br>
<span class="quotelev1">&gt; 101  11   118  126  2    28   36   44   52   60   69   77   85   93  
</span><br>
<span class="quotelev1">&gt; 102  110  119  127  20   29   37   45   53   61   7    78   86   94  
</span><br>
<span class="quotelev1">&gt; 103  111  12   13   21   3    38   46   54   62   70   79   87   95  
</span><br>
<span class="quotelev1">&gt; 104  112  120  14   22   30   39   47   55   63   71   8    88   96  
</span><br>
<span class="quotelev1">&gt; 105  113  121  15   23   31   4    48   56   64   72   80   89   97 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We aren't using the opensm, but voltaire's SM on a 2012 switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 7, 2008 at 9:37 AM, Lenny Verkhovsky 
</span><br>
<span class="quotelev1">&gt; &lt;lenny.verkhovsky_at_[hidden] &lt;mailto:lenny.verkhovsky_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Matt,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It seems that the right way to do it is the fallowing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -mca btl openib,self -mca btl_openib_ib_pkey_val 33033
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     when the value is a decimal number of the pkey, in your case
</span><br>
<span class="quotelev1">&gt;     0x8109 = 33033, and no need for btl_openib_ib_pkey_ix value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ex. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun -np 2 -H witch2,witch3 -mca btl openib,self -mca
</span><br>
<span class="quotelev1">&gt;     btl_openib_ib_pkey_val 32769 ./mpi_p1_4_1_2 -t lt
</span><br>
<span class="quotelev1">&gt;     LT (2) (size min max avg) 1 3.511429 3.511429 3.511429
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if it's not working check cat
</span><br>
<span class="quotelev1">&gt;     /sys/class/infiniband/mthca0/ports/1/pkeys/* for pkeys ans SM,
</span><br>
<span class="quotelev1">&gt;     maybe it's a setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Pasha is currently checking this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 10/7/08, *Jeff Squyres* &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         FWIW, if this configuration is for all of your users, you
</span><br>
<span class="quotelev1">&gt;         might want to specify these MCA params in the default MCA
</span><br>
<span class="quotelev1">&gt;         param file, or the environment, ...etc.  Just so that you
</span><br>
<span class="quotelev1">&gt;         don't have to specify it on every mpirun command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         See
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Oct 7, 2008, at 5:43 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Sorry, misunderstood the question,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             thanks for Pasha the right command line will be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -mca btl openib,self -mca btl_openib_of_pkey_val 0x8109
</span><br>
<span class="quotelev1">&gt;             -mca btl_openib_of_pkey_ix 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             #mpirun -np 2 -H witch2,witch3 -mca btl openib,self -mca
</span><br>
<span class="quotelev1">&gt;             btl_openib_of_pkey_val 0x8001 -mca btl_openib_of_pkey_ix 1
</span><br>
<span class="quotelev1">&gt;             ./mpi_p1_4_TRUNK -t lt
</span><br>
<span class="quotelev1">&gt;             LT (2) (size min max avg) 1 3.443480 3.443480 3.443480
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On 10/6/08, Jeff Squyres &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote: On Oct 5, 2008, at
</span><br>
<span class="quotelev1">&gt;             1:22 PM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             you should probably use -mca tcp,self  -mca
</span><br>
<span class="quotelev1">&gt;             btl_openib_if_include ib0.8109
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Really?  I thought we only took OpenFabrics device names
</span><br>
<span class="quotelev1">&gt;             in the openib_if_include MCA param...?  It looks like
</span><br>
<span class="quotelev1">&gt;             ib0.8109 is an IPoIB device name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On 10/3/08, Matt Burgess &lt;burgess.matt_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:burgess.matt_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;             Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I'm trying to get openmpi working over openib partitions.
</span><br>
<span class="quotelev1">&gt;             On this cluster, the partition number is 0x109. The ib
</span><br>
<span class="quotelev1">&gt;             interfaces are pingable over the appropriate ib0.8109
</span><br>
<span class="quotelev1">&gt;             interface:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             d2:/opt/openmpi-ib # ifconfig ib0.8109
</span><br>
<span class="quotelev1">&gt;             ib0.8109  Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev1">&gt;             80-00-00-4A-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;                     inet addr:10.21.48.2 &lt;<a href="http://10.21.48.2">http://10.21.48.2</a>&gt;
</span><br>
<span class="quotelev1">&gt;              Bcast:10.21.255.255 &lt;<a href="http://10.21.255.255">http://10.21.255.255</a>&gt;
</span><br>
<span class="quotelev1">&gt;              Mask:255.255.0.0 &lt;<a href="http://255.255.0.0">http://255.255.0.0</a>&gt;
</span><br>
<span class="quotelev1">&gt;                     inet6 addr: fe80::202:c902:26:ca01/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;                     UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev1">&gt;                     RX packets:16811 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;                     TX packets:15848 errors:0 dropped:1 overruns:0
</span><br>
<span class="quotelev1">&gt;             carrier:0
</span><br>
<span class="quotelev1">&gt;                     collisions:0 txqueuelen:256
</span><br>
<span class="quotelev1">&gt;                     RX bytes:102229428 (97.4 Mb)  TX bytes:102324172
</span><br>
<span class="quotelev1">&gt;             (97.5 Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I have tried the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile
</span><br>
<span class="quotelev1">&gt;             machinefile -mca btl openib,self -mca btl_openib_max_btls
</span><br>
<span class="quotelev1">&gt;             1 -mca btl_openib_ib_pkey_val 0x8109 -mca
</span><br>
<span class="quotelev1">&gt;             btl_openib_ib_pkey_ix 1 /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             but I just get a RETRY EXCEEDED ERROR. Is there a MCA
</span><br>
<span class="quotelev1">&gt;             parameter I am missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I was successful using tcp only:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile
</span><br>
<span class="quotelev1">&gt;             machinefile -mca btl tcp,self -mca btl_openib_max_btls 1
</span><br>
<span class="quotelev1">&gt;             -mca btl_openib_ib_pkey_val 0x8109
</span><br>
<span class="quotelev1">&gt;             /cluster/pallas/x86_64-ib/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thanks,
</span><br>
<span class="quotelev1">&gt;             Matt Burgess
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -- 
</span><br>
<span class="quotelev1">&gt;             Jeff Squyres
</span><br>
<span class="quotelev1">&gt;             Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
--
Pavel Shamis (Pasha)
Mellanox Technologies LTD.

</pre>
<p>
Index: ompi/mca/btl/openib/btl_openib_component.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_component.c	(revision 19490)
<br>
+++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
<br>
@@ -558,7 +558,7 @@ static int init_one_hca(opal_list_t *btl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto dealloc_pd;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-    ret = OMPI_SUCCESS; 
<br>
+    ret = OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Note ports are 1 based hence j = 1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 1; i &lt;= hca-&gt;ib_dev_attr.phys_port_cnt; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ibv_port_attr ib_port_attr;
<br>
@@ -580,7 +580,7 @@ static int init_one_hca(opal_list_t *btl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint16_t pkey,j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j &lt; hca-&gt;ib_dev_attr.max_pkeys; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_query_pkey(hca-&gt;ib_dev_context, i, j, &amp;pkey);
<br>
-                    pkey=ntohs(pkey);
<br>
+                    pkey=ntohs(pkey) &amp; 0x7fff;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(pkey == mca_btl_openib_component.ib_pkey_val){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = init_one_port(btl_list, hca, i, j, &amp;ib_port_attr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
Index: ompi/mca/btl/openib/btl_openib_ini.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_ini.c	(revision 19490)
<br>
+++ ompi/mca/btl/openib/btl_openib_ini.c	(working copy)
<br>
@@ -90,8 +90,6 @@ static int parse_line(parsed_section_val
<br>
&nbsp;static void reset_section(bool had_previous_value, parsed_section_values_t *s);
<br>
&nbsp;static void reset_values(ompi_btl_openib_ini_values_t *v);
<br>
&nbsp;static int save_section(parsed_section_values_t *s);
<br>
-static int intify(char *string);
<br>
-static int intify_list(char *str, uint32_t **values, int *len);
<br>
&nbsp;static inline void show_help(const char *topic);
<br>
&nbsp;
<br>
&nbsp;
<br>
@@ -364,14 +362,14 @@ static int parse_line(parsed_section_val
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all whitespace at the beginning and ending of the value. */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == strcasecmp(key_buffer, &quot;vendor_id&quot;)) {
<br>
-        if (OMPI_SUCCESS != (ret = intify_list(value, &amp;sv-&gt;vendor_ids, 
<br>
+        if (OMPI_SUCCESS != (ret = ompi_btl_openib_ini_intify_list(value, &amp;sv-&gt;vendor_ids, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;sv-&gt;vendor_ids_len))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (0 == strcasecmp(key_buffer, &quot;vendor_part_id&quot;)) {
<br>
-        if (OMPI_SUCCESS != (ret = intify_list(value, &amp;sv-&gt;vendor_part_ids,
<br>
+        if (OMPI_SUCCESS != (ret = ompi_btl_openib_ini_intify_list(value, &amp;sv-&gt;vendor_part_ids,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;sv-&gt;vendor_part_ids_len))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -379,13 +377,13 @@ static int parse_line(parsed_section_val
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (0 == strcasecmp(key_buffer, &quot;mtu&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Single value */
<br>
-        sv-&gt;values.mtu = (uint32_t) intify(value);
<br>
+        sv-&gt;values.mtu = (uint32_t) ompi_btl_openib_ini_intify(value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sv-&gt;values.mtu_set = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (0 == strcasecmp(key_buffer, &quot;use_eager_rdma&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Single value */
<br>
-        sv-&gt;values.use_eager_rdma = (uint32_t) intify(value);
<br>
+        sv-&gt;values.use_eager_rdma = (uint32_t) ompi_btl_openib_ini_intify(value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sv-&gt;values.use_eager_rdma_set = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
@@ -547,7 +545,7 @@ static int save_section(parsed_section_v
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Do string-to-integer conversion, for both hex and decimal numbers
<br>
&nbsp;&nbsp;*/
<br>
-static int intify(char *str)
<br>
+int ompi_btl_openib_ini_intify(char *str)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (isspace(*str)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++str;
<br>
@@ -568,7 +566,7 @@ static int intify(char *str)
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Take a comma-delimited list and infity them all
<br>
&nbsp;&nbsp;*/
<br>
-static int intify_list(char *value, uint32_t **values, int *len)
<br>
+int ompi_btl_openib_ini_intify_list(char *value, uint32_t **values, int *len)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *comma;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *str = value;
<br>
@@ -584,7 +582,7 @@ static int intify_list(char *value, uint
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == *values) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        *values[0] = (uint32_t) intify(str);
<br>
+        *values[0] = (uint32_t) ompi_btl_openib_ini_intify(str);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*len = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If we found a comma, loop over all the values.  Be a
<br>
@@ -594,7 +592,7 @@ static int intify_list(char *value, uint
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*comma = '\0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*values = realloc(*values, sizeof(uint32_t) * (*len + 2));
<br>
-            (*values)[*len] = (int32_t) intify(str);
<br>
+            (*values)[*len] = (int32_t) ompi_btl_openib_ini_intify(str);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++(*len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;str = comma + 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comma = strchr(str, ',');
<br>
@@ -602,7 +600,7 @@ static int intify_list(char *value, uint
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Get the last value (i.e., the value after the last
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comma, because it won't have been snarfed in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;loop) */
<br>
-        (*values)[*len] = (uint32_t) intify(str);
<br>
+        (*values)[*len] = (uint32_t) ompi_btl_openib_ini_intify(str);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++(*len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
Index: ompi/mca/btl/openib/btl_openib_ini.h
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_ini.h	(revision 19490)
<br>
+++ ompi/mca/btl/openib/btl_openib_ini.h	(working copy)
<br>
@@ -49,6 +49,9 @@ extern &quot;C&quot; {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ompi_btl_openib_ini_finalize(void);
<br>
&nbsp;
<br>
+    int ompi_btl_openib_ini_intify(char *string);
<br>
+    int ompi_btl_openib_ini_intify_list(char *str, uint32_t **values, int *len);
<br>
+
<br>
&nbsp;#if defined(c_plusplus) || defined(__cplusplus)
<br>
&nbsp;}
<br>
&nbsp;#endif
<br>
Index: ompi/mca/btl/openib/btl_openib_mca.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_mca.c	(revision 19490)
<br>
+++ ompi/mca/btl/openib/btl_openib_mca.c	(working copy)
<br>
@@ -27,6 +27,7 @@
<br>
&nbsp;#include &quot;opal/mca/base/mca_base_param.h&quot;
<br>
&nbsp;#include &quot;btl_openib.h&quot;
<br>
&nbsp;#include &quot;btl_openib_mca.h&quot;
<br>
+#include &quot;btl_openib_ini.h&quot;
<br>
&nbsp;
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Local flags
<br>
@@ -97,7 +98,7 @@ static inline int reg_int(const char* pa
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;int btl_openib_register_mca_params(void) 
<br>
&nbsp;{
<br>
-    char *msg, *str;
<br>
+    char *msg, *str, *pkey;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ival, ival2, ret, tmp;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OMPI_SUCCESS;
<br>
@@ -192,13 +193,15 @@ int btl_openib_register_mca_params(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, &amp;ival, REGINT_GE_ZERO));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.ib_pkey_ix = (uint32_t) ival;
<br>
&nbsp;
<br>
-    CHECK(reg_int(&quot;ib_pkey_val&quot;, &quot;InfiniBand pkey value&quot;
<br>
+    CHECK(reg_string(&quot;ib_pkey_val&quot;, &quot;InfiniBand pkey value&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;(must be &gt; 0 and &lt; 0xffff)&quot;,
<br>
-                  0, &amp;ival, REGINT_GE_ZERO));
<br>
-    if (ival &gt; 0xffff) {
<br>
+                  &quot;0&quot;, &amp;pkey, 0));
<br>
+    mca_btl_openib_component.ib_pkey_val = ompi_btl_openib_ini_intify(pkey) &amp; 0x7fff;
<br>
+    if (mca_btl_openib_component.ib_pkey_val &gt; 0xffff || 
<br>
+            mca_btl_openib_component.ib_pkey_val &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = OMPI_ERR_BAD_PARAM;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    mca_btl_openib_component.ib_pkey_val = (uint32_t) ival;
<br>
+    free(pkey);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHECK(reg_int(&quot;ib_psn&quot;, &quot;InfiniBand packet sequence starting number &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;(must be &gt;= 0)&quot;, 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4743.php">Matt Burgess: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4741.php">Matt Burgess: "[OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="4741.php">Matt Burgess: "[OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4743.php">Matt Burgess: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="4743.php">Matt Burgess: "Re: [OMPI devel] Fwd: [OMPI users] OpenMPI with openib partitions"</a>
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

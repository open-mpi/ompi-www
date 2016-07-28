<?
$subject_val = "[OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  1 01:31:05 2011" -->
<!-- isoreceived="20110101063105" -->
<!-- sent="Sat, 1 Jan 2011 14:30:56 +0800 (CST)" -->
<!-- isosent="20110101063056" -->
<!-- name="&#227;&#219;&#202;&#165;&#213;&#220;" -->
<!-- email="ksz_at_[hidden]" -->
<!-- subject="[OMPI users] can't use &amp;quot;--mca btl_openib_cpc_include xoob&amp;quot;" -->
<!-- id="167ce1e.a9fc.12d40458d10.Coremail.ksz_at_sccas.cn" -->
<!-- charset="GBK" -->
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
<strong>From:</strong> &#227;&#219;&#202;&#165;&#213;&#220; (<em>ksz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-01 01:30:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15240.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM has retired"</a>
<li><strong>Previous message:</strong> <a href="../../2010/12/15238.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15277.php">Jeff Squyres: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>Reply:</strong> <a href="15277.php">Jeff Squyres: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>Reply:</strong> <a href="15350.php">Shamis, Pavel: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
my system have mellanox connectX adapter in all nodes, when use cmd &quot;/sbin/lspci&quot;, will print &quot;0c:00.0 InfiniBand: Mellanox Technologies MT25418 [ConnectX IB DDR] (rev a0)&quot;. And ofed 1.4.2 has been installed.
<br>
I install openmpi 1.4.3 using cmd &quot;./configure --prefix=/home_soft/home/scksz/mpi/ompi143; make all install&quot;, the config.log contain those information about openib, xrc or xoob:
<br>
<p>&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;config.log information about openib&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
<br>
configure:5726: checking whether to add padding to the openib control header
<br>
configure:5739: result: no
<br>
| #define OMPI_OPENIB_PAD_HDR 0
<br>
...
<br>
configure:126382: checking for m4 configure components in framework btl
<br>
configure:126384: result: elan, gm, mx, ofud, openib, portals, tcp, udapl
<br>
configure:132447: checking --with-openib value
<br>
configure:132450: result: simple ok (unspecified)
<br>
configure:132492: checking --with-openib-libdir value
<br>
configure:132495: result: simple ok (unspecified)
<br>
configure:135339: checking for MCA component btl:openib compile mode
<br>
configure:135345: result: dso
<br>
configure:135446: checking --with-openib value
<br>
configure:135449: result: simple ok (unspecified)
<br>
configure:135491: checking --with-openib-libdir value
<br>
configure:135494: result: simple ok (unspecified)
<br>
configure:138177: checking which openib btl cpcs will be built
<br>
configure:138179: result: oob xoob rdmacm
<br>
configure:138242: checking if MCA component btl:openib can compile
<br>
configure:138244: result: yes
<br>
config.status:2748: creating ompi/mca/btl/openib/Makefile
<br>
MCA_btl_ALL_COMPONENTS=' self sm elan gm mx ofud openib portals tcp udapl'
<br>
MCA_btl_ALL_SUBDIRS=' mca/btl/self mca/btl/sm mca/btl/elan mca/btl/gm mca/btl/mx mca/btl/ofud mca/btl/openib mca/btl/portals mca/btl/tcp mca/btl/udapl'
<br>
MCA_btl_DSO_COMPONENTS=' self sm ofud openib tcp'
<br>
MCA_btl_DSO_SUBDIRS=' mca/btl/self mca/btl/sm mca/btl/ofud mca/btl/openib mca/btl/tcp'
<br>
MCA_btl_openib_have_ibcm_FALSE=''
<br>
MCA_btl_openib_have_ibcm_TRUE='#'
<br>
MCA_btl_openib_have_rdmacm_FALSE='#'
<br>
MCA_btl_openib_have_rdmacm_TRUE=''
<br>
MCA_btl_openib_have_xrc_FALSE='#'
<br>
MCA_btl_openib_have_xrc_TRUE=''
<br>
OMPI_BUILD_btl_openib_DSO_FALSE='#'
<br>
OMPI_BUILD_btl_openib_DSO_TRUE=''
<br>
btl_openib_CFLAGS=''
<br>
btl_openib_CPPFLAGS=''
<br>
btl_openib_LDFLAGS=''
<br>
btl_openib_LIBS='-lrdmacm -libverbs '
<br>
&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;config.log information about xrc&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
<br>
configure:134262: checking for ibv_create_xrc_rcv_qp
<br>
configure:134318: gcc -o conftest -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread       conftest.c -lnsl -lutil  -lm  -libverbs  &gt;&amp;5
<br>
configure:134325: $? = 0
<br>
configure:134347: result: yes
<br>
configure:134948: checking if ConnectX XRC support is enabled
<br>
configure:134956: result: yes
<br>
configure:137261: checking for ibv_create_xrc_rcv_qp
<br>
configure:137346: result: yes
<br>
configure:137947: checking if ConnectX XRC support is enabled
<br>
configure:137955: result: yes
<br>
| #define HAVE_IBV_CREATE_XRC_RCV_QP 1
<br>
...
<br>
| #define OMPI_HAVE_CONNECTX_XRC 1
<br>
...
<br>
ac_cv_func_ibv_create_xrc_rcv_qp=yes
<br>
MCA_btl_openib_have_xrc_FALSE='#'
<br>
MCA_btl_openib_have_xrc_TRUE=''
<br>
&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;config.log information about xoob&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
<br>
configure:138179: result: oob xoob rdmacm
<br>
&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
<br>
<p>after ompi's installation I add the ompi's PATH and LD_LIBRARY_PATH in .bashrc.
<br>
Then I compile a mpi code named &quot;mpisample.c&quot;, use cmd &quot;mpicc mpisample.c -o a_user.out&quot;.
<br>
When I run the programm &quot;run a_user.out&quot; using cmd &quot;mpirun -host LB270210,CB060106,CB060107 -np 3 --mca btl_openib_cpc_include xoob --mca orte_base_help_aggregate 0 a_user.out&quot;, will print:
<br>
<p>&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
<br>
--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&nbsp;&nbsp;Local host:           CB060107
<br>
&nbsp;&nbsp;Local device:         mlx4_0
<br>
&nbsp;&nbsp;Local port:           1
<br>
&nbsp;&nbsp;CPCs attempted:       xoob
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&nbsp;&nbsp;Local host:           LB270210
<br>
&nbsp;&nbsp;Local device:         mlx4_0
<br>
&nbsp;&nbsp;Local port:           1
<br>
&nbsp;&nbsp;CPCs attempted:       xoob
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&nbsp;&nbsp;Local host:           CB060106
<br>
&nbsp;&nbsp;Local device:         mlx4_0
<br>
&nbsp;&nbsp;Local port:           1
<br>
&nbsp;&nbsp;CPCs attempted:       xoob
<br>
--------------------------------------------------------------------------
<br>
Hello! My rank is 0. My hostname is &quot;LB270210&quot;
<br>
Hello! My rank is 2. My hostname is &quot;CB060107&quot;
<br>
Hello! My rank is 1. My hostname is &quot;CB060106&quot;
<br>
&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
<br>
<p>When I use cmd &quot;mpirun -host LB270210,CB060106,CB060107 -np 3 --mca btl openib,self,sm a_user.out&quot; or &quot;mpirun -host LB270210,CB060106,CB060107 -np 3 --mca btl openib,self,sm --mca btl_openib_cpc_include rdmacm a_user.out&quot;, will print correct result, but use cmd &quot;mpirun -host LB270210,CB060106,CB060107 -np 3 --mca btl openib a_user.out&quot;, will print error mesg.
<br>
<p>I want to know: 
<br>
1) When I want to use XRC, I must have a special IB switch?
<br>
2) How can I use XRC in ompi,and on which situation the XRC feature will bring benifit?
<br>
3) If this is only way to using XRC that using &quot;-mca btl_openib_cpc_include xoob&quot;?
<br>
4) When using xoob, which transport and network protocol ompi will use?
<br>
5) When using Qlogic adapter, how to optimize opmi?
<br>
6) What's mean of &quot;CPC&quot; in ompi?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15240.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM has retired"</a>
<li><strong>Previous message:</strong> <a href="../../2010/12/15238.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15277.php">Jeff Squyres: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>Reply:</strong> <a href="15277.php">Jeff Squyres: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<li><strong>Reply:</strong> <a href="15350.php">Shamis, Pavel: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
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

<?
$subject_val = "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 09:32:05 2009" -->
<!-- isoreceived="20090123143205" -->
<!-- sent="Fri, 23 Jan 2009 09:31:59 -0500" -->
<!-- isosent="20090123143159" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5" -->
<!-- id="77E70D73-B48A-431A-AE8D-4DF0895418F5_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200901231504.20477.roy.dragseth_at_uit.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 09:31:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7798.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7796.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>In reply to:</strong> <a href="7793.php">Roy Dragseth: "[OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Reply:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ew.  Yes, I can see this being a problem.
<br>
<p>I'm guessing that the real issue is that OMPI embeds the libltdl from  
<br>
LT 2.2.6a inside libopen_pal (one of the internal OMPI libraries).   
<br>
Waving my hands a bit, but it's not hard to imagine some sort of clash  
<br>
is going on between the -lltdl you added to the command line and the  
<br>
libltdl that is embedded in OMPI's libraries.
<br>
<p>Can you verify that this is what is happening?
<br>
<p>If it is, I wonder if we should petition the LT authors to give us a  
<br>
configure option to prefix all the symbols in libltdl so that we don't  
<br>
get clashes like this -- similar to what we do with libevent and PLPA  
<br>
(both of which are also embedded in Open MPI's internal libraries).
<br>
<p><p><p>On Jan 23, 2009, at 9:04 AM, Roy Dragseth wrote:
<br>
<p><span class="quotelev1">&gt; Hi, all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know if this is to be considered a real bug or not, I'm just
</span><br>
<span class="quotelev1">&gt; reporting it here so people can find it if they google around for  
</span><br>
<span class="quotelev1">&gt; the error
</span><br>
<span class="quotelev1">&gt; message this produces.  There is a backtrace at the end of this mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem description:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Openmpi 1.3 seems to be nonfunctional when used with libltdl in  
</span><br>
<span class="quotelev1">&gt; libtool v1.5
</span><br>
<span class="quotelev1">&gt; that is installed on CentOS (aka RH EL) 4 and 5.   Upgrading to  
</span><br>
<span class="quotelev1">&gt; libtool
</span><br>
<span class="quotelev1">&gt; v2.2.6a (and maybe earlier versions) solves the problem.  We saw  
</span><br>
<span class="quotelev1">&gt; this problem
</span><br>
<span class="quotelev1">&gt; with both gcc and icc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a code snippet that is extracted from the real application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nestcrash.c:
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;ltdl.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc,char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  char *dummy=&quot;dummy&quot;;
</span><br>
<span class="quotelev1">&gt;  const lt_dlhandle hModule = lt_dlopenext(dummy);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will crash in MPI_Init when using libtool 1.5.X, if you comment  
</span><br>
<span class="quotelev1">&gt; out
</span><br>
<span class="quotelev1">&gt; lt_dlopenext it will run normally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can provide a complete example if neccessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I said earlier, upgrading to libtool 2.2.6a solved the problem  
</span><br>
<span class="quotelev1">&gt; for us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the backtrace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [ 0] /lib64/tls/libpthread.so.0 [0x3ffce0c4f0]
</span><br>
<span class="quotelev1">&gt; [ 1] /global/apps/openmpi/1.3rc2/lib/libopen-pal.so.0 [0x2a95d4bce5]
</span><br>
<span class="quotelev1">&gt; [ 2] /global/apps/openmpi/1.3rc2/lib/libopen-pal.so.0(lt_dlopenadvise
</span><br>
<span class="quotelev1">&gt; +0xf0) [0x2a95d4b470]
</span><br>
<span class="quotelev1">&gt; [ 3] /global/apps/openmpi/1.3rc2/lib/libopen-pal.so.0 [0x2a95d56e1f]
</span><br>
<span class="quotelev1">&gt; [ 4] /global/apps/openmpi/1.3rc2/lib/libopen-
</span><br>
<span class="quotelev1">&gt; pal.so.0(mca_base_component_find+0x58d) [0x2a95d5657d]
</span><br>
<span class="quotelev1">&gt; [ 5] /global/apps/openmpi/1.3rc2/lib/libopen-
</span><br>
<span class="quotelev1">&gt; pal.so.0(mca_base_components_open+0x1ae) [0x2a95d581be]
</span><br>
<span class="quotelev1">&gt; [ 6] /global/apps/openmpi/1.3rc2/lib/libopen-
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_paffinity_base_open+0xad) [0x2a95d73ddd]
</span><br>
<span class="quotelev1">&gt; [ 7] /global/apps/openmpi/1.3rc2/lib/libopen-pal.so.0(opal_init+0x64)
</span><br>
<span class="quotelev1">&gt; [0x2a95d43e64]
</span><br>
<span class="quotelev1">&gt; [ 8] /global/apps/openmpi/1.3rc2/lib/libopen-rte.so.0(orte_init+0x1e)
</span><br>
<span class="quotelev1">&gt; [0x2a95bdeb8e]
</span><br>
<span class="quotelev1">&gt; [ 9] /global/apps/openmpi/1.3rc2/lib/libmpi.so.0 [0x2a95a38fee]
</span><br>
<span class="quotelev1">&gt; [10] /global/apps/openmpi/1.3rc2/lib/libmpi.so.0(PMPI_Init_thread 
</span><br>
<span class="quotelev1">&gt; +0x72)
</span><br>
<span class="quotelev1">&gt; [0x2a95a5b9c2]
</span><br>
<span class="quotelev1">&gt; [11] nest-ompi_1.3rc2/bin/nest(_ZN4nest12Communicator4initEPiPPPc 
</span><br>
<span class="quotelev1">&gt; +0x11f)
</span><br>
<span class="quotelev1">&gt; [0x55440f]
</span><br>
<span class="quotelev1">&gt; [12] nest-ompi_1.3rc2/bin/nest(main+0x74) [0x4a7674]
</span><br>
<span class="quotelev1">&gt; [13] /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x339271c3fb]
</span><br>
<span class="quotelev1">&gt; [14] nest-ompi_1.3rc2/bin/nest(_ZNSt8ios_base4InitD1Ev+0x5a)  
</span><br>
<span class="quotelev1">&gt; [0x4a756a]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The Computer Center, University of Troms&#248;, N-9037 TROMS&#216; Norway.
</span><br>
<span class="quotelev1">&gt; 	      phone:+47 77 64 41 07, fax:+47 77 64 41 00
</span><br>
<span class="quotelev1">&gt;        Roy Dragseth, Team Leader, High Performance Computing
</span><br>
<span class="quotelev1">&gt; 	 Direct call: +47 77 64 62 56. email: roy.dragseth_at_[hidden]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7798.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7796.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>In reply to:</strong> <a href="7793.php">Roy Dragseth: "[OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Reply:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
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

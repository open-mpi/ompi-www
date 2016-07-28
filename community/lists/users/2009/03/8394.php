<?
$subject_val = "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 10:19:24 2009" -->
<!-- isoreceived="20090311141924" -->
<!-- sent="Wed, 11 Mar 2009 10:19:05 -0400" -->
<!-- isosent="20090311141905" -->
<!-- name="Yu Chen" -->
<!-- email="chen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand" -->
<!-- id="910BFFFA-8333-4EAF-9B22-E4F08670979B_at_hhmi.umbc.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="2E8ED5D1-64B4-4DAD-A2CC-0AB572B1DCE7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand<br>
<strong>From:</strong> Yu Chen (<em>chen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 10:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8395.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
<li><strong>Previous message:</strong> <a href="8393.php">Manuel Holtgrewe: "[OMPI users] Is Datatype extent for INTEGER4 set incorrectly for files in OpenMPI 1.3?"</a>
<li><strong>In reply to:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8395.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
<li><strong>Reply:</strong> <a href="8395.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Jeff
<br>
<p>Thanks for the quick reply.
<br>
I think this is the same as this thread in development email list:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2009/02/5367.php">http://www.open-mpi.org/community/lists/devel/2009/02/5367.php</a>
<br>
<p>It seems this is going to be fixed in 1.3.1, but meanwhile is there an  
<br>
easy way to get around for now?
<br>
<p>I will send all the information in next email if you would still like  
<br>
to look at it.
<br>
<p>Chen
<br>
<p>On Mar 10, 2009, at 3:48 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2009, at 2:07 PM, Yu Chen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I downloaded 1.3, and try to compile it with gcc(4.2.0) and g95(0.91)
</span><br>
<span class="quotelev2">&gt;&gt; on RHEL AS 4. But I got following errors. Any help are greatly
</span><br>
<span class="quotelev2">&gt;&gt; appreciated.  (If I compile with gcc(3.4.5) and g95(0.91), it  
</span><br>
<span class="quotelev2">&gt;&gt; passes.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  /usr/local/gcc/bin/gcc -DHAVE_CONFIG_H -I. -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../opal/include -I../../../../orte/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/ 
</span><br>
<span class="quotelev2">&gt;&gt; libplpa -
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_PROFILE_LAYER=1 -DOMPI_COMPILING_F77_WRAPPERS=1 -I../../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -
</span><br>
<span class="quotelev2">&gt;&gt; fvisibility=hidden -MT pcart_create_f.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pcart_create_f.Tpo -c pcart_create_f.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pcart_create_f.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  /usr/local/gcc/bin/gcc -DHAVE_CONFIG_H -I. -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../opal/include -I../../../../orte/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/ 
</span><br>
<span class="quotelev2">&gt;&gt; libplpa -
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_PROFILE_LAYER=1 -DOMPI_COMPILING_F77_WRAPPERS=1 -I../../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -
</span><br>
<span class="quotelev2">&gt;&gt; fvisibility=hidden -MT pcart_coords_f.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pcart_coords_f.Tpo -c pcart_coords_f.c  -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pcart_coords_f.o
</span><br>
<span class="quotelev2">&gt;&gt; pcart_coords_f.c: In function &#145;mpi_cart_coords_f&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; pcart_coords_f.c:74: error: lvalue required as decrement operand
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [pcart_coords_f.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/groups/visitors/home/cheny/Builds/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3-g95/ompi/mpi/f77/profile'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; CY
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8395.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
<li><strong>Previous message:</strong> <a href="8393.php">Manuel Holtgrewe: "[OMPI users] Is Datatype extent for INTEGER4 set incorrectly for files in OpenMPI 1.3?"</a>
<li><strong>In reply to:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8395.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
<li><strong>Reply:</strong> <a href="8395.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue requiredasdecrement operand"</a>
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

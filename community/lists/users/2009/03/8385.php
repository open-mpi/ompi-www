<?
$subject_val = "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 15:48:33 2009" -->
<!-- isoreceived="20090310194833" -->
<!-- sent="Tue, 10 Mar 2009 15:48:26 -0400" -->
<!-- isosent="20090310194826" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand" -->
<!-- id="2E8ED5D1-64B4-4DAD-A2CC-0AB572B1DCE7_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="492E359D-8707-4D2A-B9F7-7B6C7C647203_at_hhmi.umbc.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 15:48:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="8384.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8383.php">Yu Chen: "[OMPI users] pcart_coords_f.c:74: error: lvalue required as decrement operand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8394.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>Reply:</strong> <a href="8394.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Mar 10, 2009, at 2:07 PM, Yu Chen wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I downloaded 1.3, and try to compile it with gcc(4.2.0) and g95(0.91)
</span><br>
<span class="quotelev1">&gt; on RHEL AS 4. But I got following errors. Any help are greatly
</span><br>
<span class="quotelev1">&gt; appreciated.  (If I compile with gcc(3.4.5) and g95(0.91), it passes.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /usr/local/gcc/bin/gcc -DHAVE_CONFIG_H -I. -
</span><br>
<span class="quotelev1">&gt; I../../../../opal/include -I../../../../orte/include -I../../../../
</span><br>
<span class="quotelev1">&gt; ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -
</span><br>
<span class="quotelev1">&gt; DOMPI_PROFILE_LAYER=1 -DOMPI_COMPILING_F77_WRAPPERS=1 -I../../../.. -
</span><br>
<span class="quotelev1">&gt; O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -
</span><br>
<span class="quotelev1">&gt; fvisibility=hidden -MT pcart_create_f.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev1">&gt; pcart_create_f.Tpo -c pcart_create_f.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev1">&gt; pcart_create_f.o
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /usr/local/gcc/bin/gcc -DHAVE_CONFIG_H -I. -
</span><br>
<span class="quotelev1">&gt; I../../../../opal/include -I../../../../orte/include -I../../../../
</span><br>
<span class="quotelev1">&gt; ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -
</span><br>
<span class="quotelev1">&gt; DOMPI_PROFILE_LAYER=1 -DOMPI_COMPILING_F77_WRAPPERS=1 -I../../../.. -
</span><br>
<span class="quotelev1">&gt; O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -
</span><br>
<span class="quotelev1">&gt; fvisibility=hidden -MT pcart_coords_f.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev1">&gt; pcart_coords_f.Tpo -c pcart_coords_f.c  -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev1">&gt; pcart_coords_f.o
</span><br>
<span class="quotelev1">&gt; pcart_coords_f.c: In function &#145;mpi_cart_coords_f&#146;:
</span><br>
<span class="quotelev1">&gt; pcart_coords_f.c:74: error: lvalue required as decrement operand
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pcart_coords_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/groups/visitors/home/cheny/Builds/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3-g95/ompi/mpi/f77/profile'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; CY
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
<li><strong>Next message:</strong> <a href="8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="8384.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8383.php">Yu Chen: "[OMPI users] pcart_coords_f.c:74: error: lvalue required as decrement operand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8394.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>Reply:</strong> <a href="8394.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
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

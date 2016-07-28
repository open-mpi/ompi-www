<?
$subject_val = "Re: [OMPI users] mpicxx and LD_RUN_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 13:52:08 2009" -->
<!-- isoreceived="20090806175208" -->
<!-- sent="Thu, 6 Aug 2009 13:52:03 -0400" -->
<!-- isosent="20090806175203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicxx and LD_RUN_PATH" -->
<!-- id="7CC8D787-4069-4B33-B32D-687FB53E26EC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A7746D6.4020007_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicxx and LD_RUN_PATH<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 13:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="10222.php">Prasadcse Perera: "Re: [OMPI users] Parallel Quicksort"</a>
<li><strong>In reply to:</strong> <a href="10195.php">John R. Cary: "[OMPI users] mpicxx and LD_RUN_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10262.php">John R. Cary: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<li><strong>Reply:</strong> <a href="10262.php">John R. Cary: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure what you're asking -- mpicxx just fork/exec's the  
<br>
underlying compiler (you can &quot;mpicxx --showme&quot; to see what it does).
<br>
<p>What do you need it to do with LD_RUN_PATH?
<br>
<p><p>On Aug 3, 2009, at 4:21 PM, John R. Cary wrote:
<br>
<p><span class="quotelev1">&gt; In the latest versions of libtool, the runtime library path is  
</span><br>
<span class="quotelev1">&gt; encoded with
</span><br>
<span class="quotelev1">&gt; a statement like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_RUN_PATH=&quot;/scr_multipole/cary/facetsall/physics/uedge/par/ 
</span><br>
<span class="quotelev1">&gt; uecxxpy/.libs:/contrib/babel-1.4.0-r6662p1-shared/lib:/scr_multipole/ 
</span><br>
<span class="quotelev1">&gt; cary/facetsall/physics/uedge/par/uecxxpy:/scr_multipole/cary/ 
</span><br>
<span class="quotelev1">&gt; volatile/uedge-r1161-par/lib:&quot;
</span><br>
<span class="quotelev1">&gt; mpicxx -g -O2 -fno-strict-aliasing -Wall -pthread -g -O2 -pipe
</span><br>
<span class="quotelev1">&gt; -march=athlon -Wall -Wno-unused -o .libs/uecxxpy ../uebase/uedge.o
</span><br>
<span class="quotelev1">&gt; libuecxxpy.a ./.libs/libuecxxpycli.so
</span><br>
<span class="quotelev1">&gt; -L/contrib/babel-1.4.0-r6662p1-shared/lib
</span><br>
<span class="quotelev1">&gt; /contrib/babel-1.4.0-r6662p1-shared/lib/libsidlstub_cxx.so
</span><br>
<span class="quotelev1">&gt; /contrib/babel-1.4.0-r6662p1-shared/lib/libsidl.so -lm
</span><br>
<span class="quotelev1">&gt; /contrib/babel-1.4.0-r6662p1-shared/lib/libparsifal.so
</span><br>
<span class="quotelev1">&gt; /contrib/babel-1.4.0-r6662p1-shared/lib/libchasmlite.so -ldl
</span><br>
<span class="quotelev1">&gt; ../uebase/libuebase.a
</span><br>
<span class="quotelev1">&gt; /scr_multipole/cary/volatile/txbase-r246-ser/lib/gcc4/libtxbase.a - 
</span><br>
<span class="quotelev1">&gt; pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using the LD_RUN_PATH variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems as if mpicxx ignores this.  Is there a way to get
</span><br>
<span class="quotelev1">&gt; back to where LD_RUN_PATH works?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx....John Cary
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10224.php">Jeff Squyres: "Re: [OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="10222.php">Prasadcse Perera: "Re: [OMPI users] Parallel Quicksort"</a>
<li><strong>In reply to:</strong> <a href="10195.php">John R. Cary: "[OMPI users] mpicxx and LD_RUN_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10262.php">John R. Cary: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<li><strong>Reply:</strong> <a href="10262.php">John R. Cary: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
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

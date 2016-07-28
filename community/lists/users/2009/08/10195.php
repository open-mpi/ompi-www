<?
$subject_val = "[OMPI users] mpicxx and LD_RUN_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 16:21:46 2009" -->
<!-- isoreceived="20090803202146" -->
<!-- sent="Mon, 03 Aug 2009 14:21:42 -0600" -->
<!-- isosent="20090803202142" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] mpicxx and LD_RUN_PATH" -->
<!-- id="4A7746D6.4020007_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpicxx and LD_RUN_PATH<br>
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 16:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10223.php">Jeff Squyres: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<li><strong>Reply:</strong> <a href="10223.php">Jeff Squyres: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the latest versions of libtool, the runtime library path is encoded with
<br>
a statement like:
<br>
<p>LD_RUN_PATH=&quot;/scr_multipole/cary/facetsall/physics/uedge/par/uecxxpy/.libs:/contrib/babel-1.4.0-r6662p1-shared/lib:/scr_multipole/cary/facetsall/physics/uedge/par/uecxxpy:/scr_multipole/cary/volatile/uedge-r1161-par/lib:&quot; 
<br>
mpicxx -g -O2 -fno-strict-aliasing -Wall -pthread -g -O2 -pipe 
<br>
-march=athlon -Wall -Wno-unused -o .libs/uecxxpy ../uebase/uedge.o  
<br>
libuecxxpy.a ./.libs/libuecxxpycli.so 
<br>
-L/contrib/babel-1.4.0-r6662p1-shared/lib 
<br>
/contrib/babel-1.4.0-r6662p1-shared/lib/libsidlstub_cxx.so 
<br>
/contrib/babel-1.4.0-r6662p1-shared/lib/libsidl.so -lm 
<br>
/contrib/babel-1.4.0-r6662p1-shared/lib/libparsifal.so 
<br>
/contrib/babel-1.4.0-r6662p1-shared/lib/libchasmlite.so -ldl 
<br>
../uebase/libuebase.a 
<br>
/scr_multipole/cary/volatile/txbase-r246-ser/lib/gcc4/libtxbase.a -pthread
<br>
<p>using the LD_RUN_PATH variable.
<br>
<p>It seems as if mpicxx ignores this.  Is there a way to get
<br>
back to where LD_RUN_PATH works?
<br>
<p>Thx....John Cary
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10196.php">Lenny Verkhovsky: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10223.php">Jeff Squyres: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<li><strong>Reply:</strong> <a href="10223.php">Jeff Squyres: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
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

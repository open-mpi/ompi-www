<?
$subject_val = "Re: [OMPI users] mpicxx and LD_RUN_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  8 18:05:30 2009" -->
<!-- isoreceived="20090808220530" -->
<!-- sent="Sat, 08 Aug 2009 16:05:24 -0600" -->
<!-- isosent="20090808220524" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicxx and LD_RUN_PATH" -->
<!-- id="4A7DF6A4.6000408_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7CC8D787-4069-4B33-B32D-687FB53E26EC_at_cisco.com" -->
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
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-08 18:05:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10263.php">otavioarj_at_[hidden]: "[OMPI users] MPI can determine which CPU to send a process?"</a>
<li><strong>Previous message:</strong> <a href="10261.php">Kenneth Yoshimoto: "Re: [OMPI users] bin/orted: Command not found."</a>
<li><strong>In reply to:</strong> <a href="10223.php">Jeff Squyres: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm not sure what you're asking -- mpicxx just fork/exec's the 
</span><br>
<span class="quotelev1">&gt; underlying compiler (you can &quot;mpicxx --showme&quot; to see what it does).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you need it to do with LD_RUN_PATH?
</span><br>
<p>Ensure that the underlying compiler see this in the environment when it 
<br>
is run.
<br>
<p>Thx.....John
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2009, at 4:21 PM, John R. Cary wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the latest versions of libtool, the runtime library path is 
</span><br>
<span class="quotelev2">&gt;&gt; encoded with
</span><br>
<span class="quotelev2">&gt;&gt; a statement like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LD_RUN_PATH=&quot;/scr_multipole/cary/facetsall/physics/uedge/par/uecxxpy/.libs:/contrib/babel-1.4.0-r6662p1-shared/lib:/scr_multipole/cary/facetsall/physics/uedge/par/uecxxpy:/scr_multipole/cary/volatile/uedge-r1161-par/lib:&quot; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicxx -g -O2 -fno-strict-aliasing -Wall -pthread -g -O2 -pipe
</span><br>
<span class="quotelev2">&gt;&gt; -march=athlon -Wall -Wno-unused -o .libs/uecxxpy ../uebase/uedge.o
</span><br>
<span class="quotelev2">&gt;&gt; libuecxxpy.a ./.libs/libuecxxpycli.so
</span><br>
<span class="quotelev2">&gt;&gt; -L/contrib/babel-1.4.0-r6662p1-shared/lib
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/babel-1.4.0-r6662p1-shared/lib/libsidlstub_cxx.so
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/babel-1.4.0-r6662p1-shared/lib/libsidl.so -lm
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/babel-1.4.0-r6662p1-shared/lib/libparsifal.so
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/babel-1.4.0-r6662p1-shared/lib/libchasmlite.so -ldl
</span><br>
<span class="quotelev2">&gt;&gt; ../uebase/libuebase.a
</span><br>
<span class="quotelev2">&gt;&gt; /scr_multipole/cary/volatile/txbase-r246-ser/lib/gcc4/libtxbase.a 
</span><br>
<span class="quotelev2">&gt;&gt; -pthread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using the LD_RUN_PATH variable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems as if mpicxx ignores this.  Is there a way to get
</span><br>
<span class="quotelev2">&gt;&gt; back to where LD_RUN_PATH works?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thx....John Cary
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Tech-X Corp., 5621 Arapahoe Ave, Suite A, Boulder CO 80303
cary_at_[hidden], p 303-448-0727, f 303-448-7756, NEW CELL 303-881-8572
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10263.php">otavioarj_at_[hidden]: "[OMPI users] MPI can determine which CPU to send a process?"</a>
<li><strong>Previous message:</strong> <a href="10261.php">Kenneth Yoshimoto: "Re: [OMPI users] bin/orted: Command not found."</a>
<li><strong>In reply to:</strong> <a href="10223.php">Jeff Squyres: "Re: [OMPI users] mpicxx and LD_RUN_PATH"</a>
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

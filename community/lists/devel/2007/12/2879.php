<?
$subject_val = "[OMPI devel] vt-intergration OS X problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 11:47:56 2007" -->
<!-- isoreceived="20071218164756" -->
<!-- sent="Tue, 18 Dec 2007 11:47:40 -0500" -->
<!-- isosent="20071218164740" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] vt-intergration OS X problem" -->
<!-- id="10A0DE5D-471F-4462-86E8-F4EDED6B851A_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] vt-intergration OS X problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 11:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2880.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.5rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="2878.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A default configure/build on OS X results in a failure -- is this just  
<br>
a missing #include &lt;string.h&gt; or somesuch?
<br>
<p>Making all in vtfilter
<br>
make[6]: Nothing to be done for `all'.
<br>
Making all in vtunify
<br>
g++ -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib -I../../ 
<br>
extlib/otf/otflib -I../../vtlib/   -fopenmp -DVT_OMP -g -Wall -Wundef - 
<br>
Wno-long-long -finline-functions  -MT vtunify-vt_unify.o -MD -MP - 
<br>
MF .deps/vtunify-vt_unify.Tpo -c -o vtunify-vt_unify.o `test -f  
<br>
'vt_unify.cc' || echo './'`vt_unify.cc
<br>
In file included from vt_unify.cc:14:
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefinitionComment_struct 
<br>
::DefRec_DefinitionComment_struct(uint32_t, const char*)&#146;:
<br>
vt_unify_defs.h:74: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions::DefRec_DefCreator_struct::DefRec_DefCreator_struct(const  
<br>
char*)&#146;:
<br>
vt_unify_defs.h:93: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefProcess_struct::DefRec_DefProcess_struct(uint32_t, const  
<br>
char*, uint32_t)&#146;:
<br>
vt_unify_defs.h:126: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefProcessGroup_struct 
<br>
::DefRec_DefProcessGroup_struct(uint32_t, uint32_t, const char*,  
<br>
uint32_t, uint32_t*)&#146;:
<br>
vt_unify_defs.h:153: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefProcessGroup_struct 
<br>
::DefRec_DefProcessGroup_struct(uint32_t, uint32_t, std::string,  
<br>
std::vector&lt;unsigned int, std::allocator&lt;unsigned int&gt; &gt;)&#146;:
<br>
vt_unify_defs.h:168: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefSclFile_struct::DefRec_DefSclFile_struct(uint32_t,  
<br>
uint32_t, const char*)&#146;:
<br>
vt_unify_defs.h:196: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefFileGroup_struct::DefRec_DefFileGroup_struct(uint32_t,  
<br>
uint32_t, const char*)&#146;:
<br>
vt_unify_defs.h:233: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions::DefRec_DefFile_struct::DefRec_DefFile_struct(uint32_t,  
<br>
uint32_t, const char*, uint32_t)&#146;:
<br>
vt_unify_defs.h:252: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefFunctionGroup_struct 
<br>
::DefRec_DefFunctionGroup_struct(uint32_t, uint32_t, const char*)&#146;:
<br>
vt_unify_defs.h:273: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefFunction_struct::DefRec_DefFunction_struct(uint32_t,  
<br>
uint32_t, const char*, uint32_t, uint32_t)&#146;:
<br>
vt_unify_defs.h:293: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefCollectiveOperation_struct 
<br>
::DefRec_DefCollectiveOperation_struct(uint32_t, uint32_t, const  
<br>
char*, uint32_t)&#146;:
<br>
vt_unify_defs.h:316: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefCounterGroup_struct 
<br>
::DefRec_DefCounterGroup_struct(uint32_t, uint32_t, const char*)&#146;:
<br>
vt_unify_defs.h:337: error: &#145;strdup&#146; was not declared in this scope
<br>
vt_unify_defs.h: In constructor  
<br>
&#145;Definitions 
<br>
::DefRec_DefCounter_struct::DefRec_DefCounter_struct(uint32_t,  
<br>
uint32_t, const char*, uint32_t, uint32_t, const char*)&#146;:
<br>
vt_unify_defs.h:358: error: &#145;strdup&#146; was not declared in this scope
<br>
make[6]: *** [vtunify-vt_unify.o] Error 1
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[3]: *** [all] Error 2
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
jsquyres has logged off ttys005 from local.
<br>
[11:46] rtp-jsquyres-8717:~/svn/vt-integration %
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2880.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.5rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="2878.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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

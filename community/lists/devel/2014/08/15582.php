<?
$subject_val = "[OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 02:11:21 2014" -->
<!-- isoreceived="20140809061121" -->
<!-- sent="Fri, 8 Aug 2014 23:11:19 -0700" -->
<!-- isosent="20140809061119" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers" -->
<!-- id="CAAvDA17Dsv4Jx=NGNXKSwwoTWHkcoUaapom=GnHwDm5kDAd6OA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 02:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15583.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Previous message:</strong> <a href="15581.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15591.php">Ralph Castain: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>Reply:</strong> <a href="15591.php">Ralph Castain: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A problem Siegmar reported on trunk over a year and a half ago is breaking
<br>
a 32-bit build of the v1.8 branch with the Sun C++ compiler:
<br>
<p>Siegmar's report appears in
<br>
<a href="http://www.open-mpi.org/community/lists/users/2013/01/21269.php">http://www.open-mpi.org/community/lists/users/2013/01/21269.php</a>
<br>
There are several warnings, but the error is (from my current build):
<br>
<p>&quot;/shared/OMPI/openmpi-1.8-latest-solaris11-x86-ib-ss12u3/openmpi-1.8.2rc4r32480/ompi/mpi/cxx/file.cc&quot;,
<br>
Error: The function opal_atomic_add_32(volatile int*, int) has not had a
<br>
body defined.
<br>
<p>Brian attached a possible fix to
<br>
<a href="http://www.open-mpi.org/community/lists/users/2013/01/21272.php">http://www.open-mpi.org/community/lists/users/2013/01/21272.php</a>
<br>
It applies cleanly to v1.8 but appears to make things worse, trading that
<br>
one error for two:
<br>
<p>&quot;/shared/OMPI/openmpi-1.8-latest-solaris11-x86-ib-ss12u3/openmpi-1.8.2rc4r32480/opal/include/opal/sys/atomic_impl.h&quot;,
<br>
line 106: Error: opal_atomic_add_64(volatile long long*, long long) was
<br>
previously declared &quot;extern&quot;, not &quot;inline&quot;.
<br>
&quot;/shared/OMPI/openmpi-1.8-latest-solaris11-x86-ib-ss12u3/openmpi-1.8.2rc4r32480/opal/include/opal/sys/atomic_impl.h&quot;,
<br>
line 121: Error: opal_atomic_sub_64(volatile long long*, long long) was
<br>
previously declared &quot;extern&quot;, not &quot;inline&quot;.
<br>
<p><p>The good news is that the problem does not exist on the trunk.
<br>
So, hopefully somebody can track down the proper changes to CMR.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15583.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Previous message:</strong> <a href="15581.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15591.php">Ralph Castain: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>Reply:</strong> <a href="15591.php">Ralph Castain: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
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

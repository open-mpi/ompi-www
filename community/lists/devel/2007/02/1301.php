<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 09:13:50 2007" -->
<!-- isoreceived="20070215141350" -->
<!-- sent="Thu, 15 Feb 2007 15:12:30 +0100" -->
<!-- isosent="20070215141230" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection" -->
<!-- id="45D46A4E.100_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 09:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1300.php">Bert Wesarg: "[OMPI devel] build problem with 1.1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1316.php">Brian W. Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>when using a multi token CC variable (like &quot;gcc -m32&quot;), the logic to
<br>
extract $extra_ldflags from libtool don't work. So here is a little hack
<br>
to remove the $CC prefix from the libtool-link cmd.
<br>
<p>Bert Wesarg
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1301/extra_ldflags-fix.patch">extra_ldflags-fix.patch</a>
</ul>
<!-- attachment="extra_ldflags-fix.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1300.php">Bert Wesarg: "[OMPI devel] build problem with 1.1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1302.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>Reply:</strong> <a href="1316.php">Brian W. Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 05:08:09 2007" -->
<!-- isoreceived="20070215100809" -->
<!-- sent="Thu, 15 Feb 2007 11:07:41 +0100" -->
<!-- isosent="20070215100741" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] build problem with 1.1.4" -->
<!-- id="45D430ED.6020204_at_informatik.uni-halle.de" -->
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
<strong>Date:</strong> 2007-02-15 05:07:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1301.php">Bert Wesarg: "[OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1299.php">Bert Wesarg: "[OMPI devel] installed wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1306.php">Brian Barrett: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>Reply:</strong> <a href="1306.php">Brian Barrett: "Re: [OMPI devel] build problem with 1.1.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I encounter a build problem with openmpi 1.1.4, which don't show up with
<br>
version 1.1.2.
<br>
<p>After a simple ./configure, the variable OPAL_DATADIR in
<br>
opal/include/opal/install_dirs.h shows this:
<br>
<p>$ grep '^#define OPAL_DATADIR' openmpi-1.1.2/opal/include/opal/install_dirs.h
<br>
#define OPAL_DATADIR &quot;/usr/local/share&quot;
<br>
<p>$ grep '^#define OPAL_DATADIR' openmpi-1.1.4/opal/include/opal/install_dirs.h
<br>
#define OPAL_DATADIR &quot;${prefix}/share&quot;
<br>
<p>this results in the problem, that the opal_wrapper can't find the wrapper
<br>
data files in /share/openmpi/.
<br>
<p>Greetings
<br>
Bert Wesarg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1301.php">Bert Wesarg: "[OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix $extra_ldflags detection"</a>
<li><strong>Previous message:</strong> <a href="1299.php">Bert Wesarg: "[OMPI devel] installed wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1306.php">Brian Barrett: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>Reply:</strong> <a href="1306.php">Brian Barrett: "Re: [OMPI devel] build problem with 1.1.4"</a>
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

<?
$subject_val = "[hwloc-devel] Possible buffer overflow in topology-linux.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 06:56:25 2015" -->
<!-- isoreceived="20150717105625" -->
<!-- sent="Fri, 17 Jul 2015 10:56:20 +0000" -->
<!-- isosent="20150717105620" -->
<!-- name="Odzioba, Lukasz" -->
<!-- email="lukasz.odzioba_at_[hidden]" -->
<!-- subject="[hwloc-devel] Possible buffer overflow in topology-linux.c" -->
<!-- id="D6EDEBF1F91015459DB866AC4EE162CCF76A2C_at_IRSMSX103.ger.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Possible buffer overflow in topology-linux.c<br>
<strong>From:</strong> Odzioba, Lukasz (<em>lukasz.odzioba_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-17 06:56:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4495.php">Brice Goglin: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>Previous message:</strong> <a href="4493.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-8-gf5ce339)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4495.php">Brice Goglin: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>Reply:</strong> <a href="4495.php">Brice Goglin: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Static analysis detected inappropriate use of strcpy function[1]  in topology-linux.c.
<br>
There are more places like this, but here data comes from dev configuration file and I think we should fix it in the first place.
<br>
<p>Below is the patch which fixes those which concern me.
<br>
Unfortunately strncpy does not guarantee that string will be NULL terminated which may cause other problems.
<br>
I am leaving it up to you whether you want to address that or no.
<br>
<p>Thanks,
<br>
Lukas
<br>
<p>[1]: <a href="http://cwe.mitre.org/data/definitions/676.html">http://cwe.mitre.org/data/definitions/676.html</a>
<br>
<p>diff --git a/hwloc/topology-linux.c b/hwloc/topology-linux.c
<br>
index 82423ff..0512bac 100644
<br>
--- a/hwloc/topology-linux.c
<br>
+++ b/hwloc/topology-linux.c
<br>
@@ -4347,15 +4347,15 @@ hwloc_linux_block_class_fillinfos(struct hwloc_backend *backend,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (tmp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*tmp = '\0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!strncmp(line, &quot;E:ID_VENDOR=&quot;, strlen(&quot;E:ID_VENDOR=&quot;))) {
<br>
-      strcpy(vendor, line+strlen(&quot;E:ID_VENDOR=&quot;));
<br>
+      strncpy(vendor, line+strlen(&quot;E:ID_VENDOR=&quot;), sizeof(vendor));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (!strncmp(line, &quot;E:ID_MODEL=&quot;, strlen(&quot;E:ID_MODEL=&quot;))) {
<br>
-      strcpy(model, line+strlen(&quot;E:ID_MODEL=&quot;));
<br>
+      strncpy(model, line+strlen(&quot;E:ID_MODEL=&quot;), sizeof(model));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (!strncmp(line, &quot;E:ID_REVISION=&quot;, strlen(&quot;E:ID_REVISION=&quot;))) {
<br>
-      strcpy(revision, line+strlen(&quot;E:ID_REVISION=&quot;));
<br>
+      strncpy(revision, line+strlen(&quot;E:ID_REVISION=&quot;), sizeof(revision));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (!strncmp(line, &quot;E:ID_SERIAL_SHORT=&quot;, strlen(&quot;E:ID_SERIAL_SHORT=&quot;))) {
<br>
-      strcpy(serial, line+strlen(&quot;E:ID_SERIAL_SHORT=&quot;));
<br>
+      strncpy(serial, line+strlen(&quot;E:ID_SERIAL_SHORT=&quot;), sizeof(serial));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (!strncmp(line, &quot;E:ID_TYPE=&quot;, strlen(&quot;E:ID_TYPE=&quot;))) {
<br>
-      strcpy(blocktype, line+strlen(&quot;E:ID_TYPE=&quot;));
<br>
+      strncpy(blocktype, line+strlen(&quot;E:ID_TYPE=&quot;), sizeof(blocktype));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;fclose(fd);
<br>
@@ -4493,7 +4493,7 @@ hwloc_linux_lookup_block_class(struct hwloc_backend *backend,
<br>
&nbsp;&nbsp;&nbsp;int dummy;
<br>
&nbsp;&nbsp;&nbsp;int res = 0;
<br>
<p>-  strcpy(path, pcidevpath);
<br>
+  strncpy(path, pcidevpath, sizeof(path));
<br>
&nbsp;&nbsp;&nbsp;pathlen = strlen(path);
<br>
--------------------------------------------------------------------
<br>
<p>Intel Technology Poland sp. z o.o.
<br>
ul. Slowackiego 173 | 80-298 Gdansk | Sad Rejonowy Gdansk Polnoc | VII Wydzial Gospodarczy Krajowego Rejestru Sadowego - KRS 101882 | NIP 957-07-52-316 | Kapital zakladowy 200.000 PLN.
<br>
<p>Ta wiadomosc wraz z zalacznikami jest przeznaczona dla okreslonego adresata i moze zawierac informacje poufne. W razie przypadkowego otrzymania tej wiadomosci, prosimy o powiadomienie nadawcy oraz trwale jej usuniecie; jakiekolwiek
<br>
przegladanie lub rozpowszechnianie jest zabronione.
<br>
This e-mail and any attachments may contain confidential material for the sole use of the intended recipient(s). If you are not the intended recipient, please contact the sender and delete all copies; any review or distribution by
<br>
others is strictly prohibited.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4495.php">Brice Goglin: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>Previous message:</strong> <a href="4493.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-8-gf5ce339)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4495.php">Brice Goglin: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>Reply:</strong> <a href="4495.php">Brice Goglin: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
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

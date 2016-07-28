<?
$subject_val = "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 08:29:59 2015" -->
<!-- isoreceived="20150717122959" -->
<!-- sent="Fri, 17 Jul 2015 14:29:55 +0200" -->
<!-- isosent="20150717122955" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Possible buffer overflow in topology-linux.c" -->
<!-- id="55A8F543.8070608_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D6EDEBF1F91015459DB866AC4EE162CCF76A2C_at_IRSMSX103.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Possible buffer overflow in topology-linux.c<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-17 08:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4496.php">Odzioba, Lukasz: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>Previous message:</strong> <a href="4494.php">Odzioba, Lukasz: "[hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>In reply to:</strong> <a href="4494.php">Odzioba, Lukasz: "[hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4496.php">Odzioba, Lukasz: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>Reply:</strong> <a href="4496.php">Odzioba, Lukasz: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I'll fix this. I'll try strlcpy() in case it's widely available
<br>
enough. Otherwise I'll just add the ending \0 manually.
<br>
<p>Brice
<br>
<p><p><p>Le 17/07/2015 12:56, Odzioba, Lukasz a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Static analysis detected inappropriate use of strcpy function[1]  in topology-linux.c.
</span><br>
<span class="quotelev1">&gt; There are more places like this, but here data comes from dev configuration file and I think we should fix it in the first place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is the patch which fixes those which concern me.
</span><br>
<span class="quotelev1">&gt; Unfortunately strncpy does not guarantee that string will be NULL terminated which may cause other problems.
</span><br>
<span class="quotelev1">&gt; I am leaving it up to you whether you want to address that or no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1]: <a href="http://cwe.mitre.org/data/definitions/676.html">http://cwe.mitre.org/data/definitions/676.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/hwloc/topology-linux.c b/hwloc/topology-linux.c
</span><br>
<span class="quotelev1">&gt; index 82423ff..0512bac 100644
</span><br>
<span class="quotelev1">&gt; --- a/hwloc/topology-linux.c
</span><br>
<span class="quotelev1">&gt; +++ b/hwloc/topology-linux.c
</span><br>
<span class="quotelev1">&gt; @@ -4347,15 +4347,15 @@ hwloc_linux_block_class_fillinfos(struct hwloc_backend *backend,
</span><br>
<span class="quotelev1">&gt;      if (tmp)
</span><br>
<span class="quotelev1">&gt;        *tmp = '\0';
</span><br>
<span class="quotelev1">&gt;      if (!strncmp(line, &quot;E:ID_VENDOR=&quot;, strlen(&quot;E:ID_VENDOR=&quot;))) {
</span><br>
<span class="quotelev1">&gt; -      strcpy(vendor, line+strlen(&quot;E:ID_VENDOR=&quot;));
</span><br>
<span class="quotelev1">&gt; +      strncpy(vendor, line+strlen(&quot;E:ID_VENDOR=&quot;), sizeof(vendor));
</span><br>
<span class="quotelev1">&gt;      } else if (!strncmp(line, &quot;E:ID_MODEL=&quot;, strlen(&quot;E:ID_MODEL=&quot;))) {
</span><br>
<span class="quotelev1">&gt; -      strcpy(model, line+strlen(&quot;E:ID_MODEL=&quot;));
</span><br>
<span class="quotelev1">&gt; +      strncpy(model, line+strlen(&quot;E:ID_MODEL=&quot;), sizeof(model));
</span><br>
<span class="quotelev1">&gt;      } else if (!strncmp(line, &quot;E:ID_REVISION=&quot;, strlen(&quot;E:ID_REVISION=&quot;))) {
</span><br>
<span class="quotelev1">&gt; -      strcpy(revision, line+strlen(&quot;E:ID_REVISION=&quot;));
</span><br>
<span class="quotelev1">&gt; +      strncpy(revision, line+strlen(&quot;E:ID_REVISION=&quot;), sizeof(revision));
</span><br>
<span class="quotelev1">&gt;      } else if (!strncmp(line, &quot;E:ID_SERIAL_SHORT=&quot;, strlen(&quot;E:ID_SERIAL_SHORT=&quot;))) {
</span><br>
<span class="quotelev1">&gt; -      strcpy(serial, line+strlen(&quot;E:ID_SERIAL_SHORT=&quot;));
</span><br>
<span class="quotelev1">&gt; +      strncpy(serial, line+strlen(&quot;E:ID_SERIAL_SHORT=&quot;), sizeof(serial));
</span><br>
<span class="quotelev1">&gt;      } else if (!strncmp(line, &quot;E:ID_TYPE=&quot;, strlen(&quot;E:ID_TYPE=&quot;))) {
</span><br>
<span class="quotelev1">&gt; -      strcpy(blocktype, line+strlen(&quot;E:ID_TYPE=&quot;));
</span><br>
<span class="quotelev1">&gt; +      strncpy(blocktype, line+strlen(&quot;E:ID_TYPE=&quot;), sizeof(blocktype));
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    fclose(fd);
</span><br>
<span class="quotelev1">&gt; @@ -4493,7 +4493,7 @@ hwloc_linux_lookup_block_class(struct hwloc_backend *backend,
</span><br>
<span class="quotelev1">&gt;    int dummy;
</span><br>
<span class="quotelev1">&gt;    int res = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -  strcpy(path, pcidevpath);
</span><br>
<span class="quotelev1">&gt; +  strncpy(path, pcidevpath, sizeof(path));
</span><br>
<span class="quotelev1">&gt;    pathlen = strlen(path);
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel Technology Poland sp. z o.o.
</span><br>
<span class="quotelev1">&gt; ul. Slowackiego 173 | 80-298 Gdansk | Sad Rejonowy Gdansk Polnoc | VII Wydzial Gospodarczy Krajowego Rejestru Sadowego - KRS 101882 | NIP 957-07-52-316 | Kapital zakladowy 200.000 PLN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ta wiadomosc wraz z zalacznikami jest przeznaczona dla okreslonego adresata i moze zawierac informacje poufne. W razie przypadkowego otrzymania tej wiadomosci, prosimy o powiadomienie nadawcy oraz trwale jej usuniecie; jakiekolwiek
</span><br>
<span class="quotelev1">&gt; przegladanie lub rozpowszechnianie jest zabronione.
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments may contain confidential material for the sole use of the intended recipient(s). If you are not the intended recipient, please contact the sender and delete all copies; any review or distribution by
</span><br>
<span class="quotelev1">&gt; others is strictly prohibited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4494.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4494.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4496.php">Odzioba, Lukasz: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>Previous message:</strong> <a href="4494.php">Odzioba, Lukasz: "[hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>In reply to:</strong> <a href="4494.php">Odzioba, Lukasz: "[hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4496.php">Odzioba, Lukasz: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
<li><strong>Reply:</strong> <a href="4496.php">Odzioba, Lukasz: "Re: [hwloc-devel] Possible buffer overflow in topology-linux.c"</a>
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

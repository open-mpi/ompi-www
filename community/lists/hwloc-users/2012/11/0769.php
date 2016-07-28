<?
$subject_val = "[hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 15:01:19 2012" -->
<!-- isoreceived="20121119200119" -->
<!-- sent="Mon, 19 Nov 2012 12:01:14 -0800 (PST)" -->
<!-- isosent="20121119200114" -->
<!-- name="Andrew Somorjai" -->
<!-- email="verthex2099_at_[hidden]" -->
<!-- subject="[hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="1353355274.99835.YahooMailNeo_at_web161805.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] Windows api threading functions equivalent to hwloc?<br>
<strong>From:</strong> Andrew Somorjai (<em>verthex2099_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 15:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0768.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Maybe reply:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below I posted a simple windows thread creation C++ routine which sets the processor affinity to two cores.

What I want is the equivalent code using hwloc. Sorry for being somewhat new to this but I'm not sure what&#160;
api calls are equivalent to the windows calls and I did search hwloc.h for &quot;affinity&quot; thinking the function call
would be easy to find. More specifically I'm wondered whats the equivalent of &quot; CreateThread
&quot;, &quot; SetThreadAffinityMask
&quot;,&#160;
&quot; GetSystemInfo
&quot;, and &quot; WaitForMultipleObjects
&quot; in hwloc.

Thanks for any useful suggestions.

#define WIN32_LEAN_AND_MEAN
#include &lt;windows.h&gt;
#include &lt;stdio.h&gt;
#include &lt;cmath&gt;
#include &lt;iostream&gt;

HANDLE *m_threads = NULL;
static DWORD_PTR WINAPI threadMain(void* p);

DWORD_PTR GetNumCPUs()//this function is not actually used by this example
{
SYSTEM_INFO m_si = {0, };
GetSystemInfo(&amp;m_si);
return (DWORD_PTR)m_si.dwNumberOfProcessors;
}
int main(int argc, char **args)
{
&#160; DWORD_PTR c = 2;

m_threads = new HANDLE[c];

for(DWORD_PTR i = 0; i &lt; c; i++)
{
DWORD_PTR m_id = 0;
DWORD_PTR m_mask = 1 &lt;&lt; i;

m_threads[i] = CreateThread(NULL, 0, (LPTHREAD_START_ROUTINE)threadMain, (LPVOID)i, NULL, &amp;m_id);
SetThreadAffinityMask(m_threads[i], m_mask);

//wprintf(L&quot;Creating Thread %d (0x%08x) Assigning to CPU 0x%08x\r\n&quot;, i, (LONG_PTR)m_threads[i], m_mask);
}
WaitForMultipleObjects(c, m_threads, TRUE, INFINITE);
return 0;
}
static DWORD_PTR WINAPI threadMain(void* p)
{
double result = 0.0;

for (int i = 0; i &lt; 1000000000; i++)
{
result = result + sin(i) * tan(i);
}

return 0;
}
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0769/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0768.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Maybe reply:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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

var base_url = "https://"+document.location.host
if (document.location.host.startsWith('library')) {
  base_url = base_url + "/firestone/renovations";
}
base_url = base_url + "/";
document.write("<base href='"+base_url+"' />");
